<?php

namespace App\Doctrine\Subscriber;

use DateTime;
use App\Entity\User;
use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Comment;
use App\Entity\Contact;
use App\Entity\File;
use App\Entity\FileUpload;
use App\Entity\Like;
use App\Repository\ArticleRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\Events;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\String\Slugger\SluggerInterface;


use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ArticleSubscriber implements EventSubscriber
{
    protected  $slugger;
    protected  $security;
    protected  $encoder;
    protected  $mailer;
    protected   $em;

    function __construct(SluggerInterface $slugger, Security $security, UserPasswordEncoderInterface $encoder,  MailerInterface $mailer, EntityManagerInterface $em)
    {

        $this->slugger = $slugger;
        $this->security = $security;
        $this->encoder = $encoder;
        $this->mailer = $mailer;
        $this->em = $em;
    }

    public function getSubscribedEvents()
    {
        return [
            "prePersist",
            "preUpdate",
            "preRemove"
        ];
    }


    public function prePersist(LifecycleEventArgs  $event)
    {
        $entity = $event->getObject();
        $user = $this->security->getUser();


        if ($entity instanceof Category || $entity instanceof Like) {
            return;
        };

        if ($entity instanceof User) {
            $entity->setRegisteredAt(new DateTime());
            if ($entity->getPassword()) {
                $encoder = $this->encoder->encodePassword($entity, $entity->getPassword());
                $entity->setPassword($encoder);
            }
            return;
        }


        if ($entity instanceof FileUpload) {
            $entity->setAddedBy($user);
            return;
        }

        $entity->setCreatedAt(new DateTime());
        if ($entity instanceof Contact) {
            $entity->setSender($user);
        }
        if ($entity instanceof Article) {
            $slug = $this->slugger->slug($entity->getTitle(), '_', 'FR');
            $entity->setSlug($slug);
            $entity->setUpdatedAt(new DateTime());
            if ($user) {
                $entity->setAuthor($user);
            }
            $articleSubscribers = $this->em->getRepository(User::class)->findBy(["emailNotification" => true]);

            $this->sendMail($articleSubscribers, $entity);
        }
    }


    public function preUpdate(LifecycleEventArgs  $event)
    {

        $entity = $event->getObject();
        if (!$entity instanceof Article) {
            return;
        }
        $slug = $this->slugger->slug($entity->getTitle(), '_', 'FR');
        $entity->setSlug($slug);
        $entity->setUpdatedAt(new DateTime());
    }

    public function preRemove(LifecycleEventArgs $event)
    {
    }

    public function sendMail($users, Article $entity)
    {
        $email = (new TemplatedEmail())
            ->from("notification@mon-app.com")
            ->subject(sprintf("L'article : '%s' de la catégorie : '%s'", $entity->getTitle(), $entity->getCategory()->getTitle()))
            ->htmlTemplate('mailer/index.html.twig');

        /**
         * @var App\Entity\User
         */


        foreach ($users as $u) {
            $email
                ->to($u->getEmail())
                ->context([
                    'article' => $entity,
                    "user" => $u,
                ]);
            $this->mailer->send($email);
        }
    }
}
