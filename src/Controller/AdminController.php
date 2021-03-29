<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Contact;
use App\Entity\FileUpload;
use App\Entity\User;
use App\Form\AdminUserType;
use App\Form\FileType;
use App\Form\FileUploadType;
use App\Form\SendMailType;
use App\Repository\CommentRepository;
use App\Repository\ContactRepository;
use App\Repository\FileUploadRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */

    public function admin(UserRepository $userRepository)
    {

        return $this->render(
            'security/index.html.twig',
            ['usersAwaiting' => $userRepository->findBy(["granted" => false]), "users" => $userRepository->findBy(["granted" => true], ['lastName' => 'ASC'])]
        );
    }

    /**
     * @Route("/", name="dummy")
     */
    public function toto()
    {

        return $this->redirectToRoute("admin");
    }
    /**
     * @Route("/admin/allow_access/{id}", name="admin_allow_acces")
     */
    public function  allowAccess(User $user, EntityManagerInterface $em, MailerInterface $mailer)
    {
        $user->setGranted(true);
        $em->flush();

        $mail = new Email();
        $mail->to($user->getEmail())
            ->subject("Votre acces à l'espace APEL STDA a été approuvé par un administrateur du site")
            ->text("Bonjour " . $user->getGender() . ' ' . $user->getFirstName() . ' ' . $user->getLastName() . ", vous pouvez dorénavent acceder au au site de l'association des parents d'élèves de l'école Sainte Thérèse d'Avila.")
            ->from("noreply@apelstda.fr");
        $mailer->send($mail);
        return $this->redirectToRoute('admin');
    }

    /**
     * @Route("/admin/delete_user/{id}", name="admin_delete_user")
     */
    public function  deleteUser(User $user, EntityManagerInterface $em)
    {
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('admin');
    }

    /**
     * @Route("/admin/mail", name="admin_mail_index")
     */
    public function mailIndex(ContactRepository $contactRepository, Request $request, MailerInterface $mailer, UserRepository $userRepository)
    {
        $form = $this->createForm(SendMailType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $userList = array_filter($userRepository->findAll(), function (User $u) use ($data) {
                return in_array($data['user'], $u->getRoles()) && !in_array('ROLE_SCHOOL', $u->getRoles());
            });

            $subject = $data['subject'];

            foreach ($userList as $user) {
                $email = new Email();
                $email
                    ->from("donotreply@apelstda.fr")
                    ->subject($subject)
                    ->to($user->getEmail())
                    ->html($data["body"]);
                $mailer->send($email);
            }


            return $this->redirectToRoute("admin_mail_index");
        }

        return  $this->render("security/mailIndex.html.twig", ["inbox" => $contactRepository->findBy(["channel" => "espace contact"]), "form" => $form->createView()]);
    }

    /**
     * @Route("/admin/mail/delete/{id}", name="admin_mail_delete")
     */

    public function mailDelete(Contact $contact, EntityManagerInterface $em)
    {
        $em->remove($contact);
        $em->flush();
        return $this->redirectToRoute('admin_mail_index');
    }
    /**
     * @Route("/admin/edit_user/{id}", name="admin_edit_user")
     */
    public function  editUser(User $user, EntityManagerInterface $em, Request $request)
    {
        $form = $this->createForm(AdminUserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $user->setGranted(true);
            $em->flush();
            return $this->redirectToRoute('admin');
        }
        return $this->render('security/edit.html.twig', ["form" => $form->createView()]);
    }

    /**
     * @Route("/admin/upload",name="admin_upload")
     */
    public function upload(Request $request, EntityManagerInterface $em, FileUploadRepository $fileUploadRepository)
    {
        $form = $this->createForm(FileUploadType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->getData();
            $em->persist($file);
            $em->flush();
            return $this->redirectToRoute('admin_upload');
        }
        return $this->render("security/upload.html.twig", ["form" => $form->createView(), "uploads" => $fileUploadRepository->findAll()]);
    }


    // /**
    //  * @Route("/admin/email",name="admin_email")
    //  */
    // public function email(UserRepository $userRepository, Request $request)
    // {

    //     return $this->render(
    //         'security/email.html.twig',
    //         ['usersAwaiting' => $userRepository->findBy(["granted" => false]), "users" => $userRepository->findBy(["granted" => true], ['lastName' => 'ASC'])]
    //     );
    // }

    /**
     * @Route("/admin/delete_file/{id}", name="admin_delete_file")
     */
    public function deleteFile(FileUpload $file, EntityManagerInterface $em, Filesystem $filesystem)
    {
        $path = "%kernel.project_dir%/public/assets/files/" . $file->getFileUploadedName();
        $result = $filesystem->remove($path);
        if ($result === false) {
            throw new \Exception(sprintf('Error deleting "%s"', $path));
        }
        $em->remove($file);
        $em->flush();
        return $this->redirectToRoute('admin_upload');
    }



    /**
     * @Route("/admin/comments", name="admin_comments")
     */
    public function comments(CommentRepository $commentRepository)
    {
        return $this->render(
            'security/comments.html.twig',
            ['blockedComments' => $commentRepository->findAll()]
        );
    }

    /**
     * @Route("/admin/comment/delete/{id}", name="comment_delete")
     */
    public function commentDelete(Comment $comment, EntityManagerInterface $em)
    {
        $em->remove($comment);
        $em->flush();
        return $this->redirectToRoute('admin_comments');
    }

    /**
     * @Route("/admin/comment/allow/{id}", name="comment_allow")
     */
    public function commentAllow(Comment $comment, EntityManagerInterface $em)
    {
        $comment->setBlocked(null);
        $em->persist($comment);
        $em->flush();
        return $this->redirectToRoute('admin_comments');
    }
}
