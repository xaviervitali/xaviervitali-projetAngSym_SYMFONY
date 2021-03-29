<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Comment;
use App\Entity\Contact;
use App\Entity\Like;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class AppFixtures extends AbstractFixture
{
    protected  $encoder;
    protected  $slug;

    public function __construct(UserPasswordEncoderInterface $encoder, SluggerInterface $slug)
    {
        $this->encoder = $encoder;
        $this->slug = $slug;
    }
    public function loadData(ObjectManager $manager)
    {
        $this->createMany(User::class, 3, function (User $user, $i) {
            $classes = ["PS", "MS", "GS", "CP", "CP/CE1", "CE1", "CE2", "CM1", "CM2"];
            $roles = ["ROLE_ADMIN", "ROLE_WRITTER", "ROLE_MODERATOR", "ROLE_SCHOOL"];

            $user
                ->setEmail("user$i@gmail.com")
                ->setFirstName($this->faker->firstName())
                ->setLastName($this->faker->lastName())
                ->setGender($this->faker->title())
                ->setChildren($this->faker->randomElements($classes, mt_rand(1, 4)))
                ->setEmailNotification($this->faker->boolean())
                ->setRoles($this->faker->randomElements($roles, mt_rand(0, 2)))
                ->setRegisteredAt($this->faker->dateTimeBetween("-1 year"))
                ->setPassword("password")
                ->setGranted($this->faker->boolean(80))
                ->setAbout($this->faker->paragraph());
        });


        $admin = new User;
        $admin->setAbout('')
            ->setChildren(["PS"])
            ->setEmail('admin@gmail.com')
            ->setPassword('password')
            ->setRoles([strtoupper("ROLE_admin")])
            ->setFirstName('Prénom admin')
            ->setLastName('Nom admin')
            ->setGranted(true)
            ->setEmailNotification(true)
            ->setGender('Mr');
        $this->manager->persist($admin);

        $school = new User;
        $school->setAbout('')
            ->setChildren(["PS"])
            ->setEmail('school@gmail.com')
            ->setPassword('password')
            ->setRoles([strtoupper("ROLE_school")])
            ->setFirstName('Prénom school')
            ->setLastName('Nom school')
            ->setGranted(true)
            ->setEmailNotification(true)
            ->setGender('Mr');
        $this->manager->persist($school);

        $user = new User;
        $user->setAbout('')
            ->setChildren(["PS"])
            ->setEmail('user@gmail.com')
            ->setPassword('password')
            ->setRoles([strtoupper("ROLE_user")])
            ->setFirstName('Prénom user')
            ->setLastName('Nom user')
            ->setGranted(true)
            ->setEmailNotification(true)
            ->setGender('Mr');
        $this->manager->persist($user);

        $moderator = new User;
        $moderator->setAbout('')
            ->setChildren(["PS"])
            ->setEmail('moderator@gmail.com')
            ->setPassword('password')
            ->setRoles([strtoupper("ROLE_moderator")])
            ->setFirstName('Prénom moderator')
            ->setLastName('Nom moderator')
            ->setGranted(true)
            ->setEmailNotification(true)
            ->setGender('Mr');
        $this->manager->persist($moderator);

        $this->manager->flush();
        $this->createMany(Category::class, 5, function (Category $category) {
            $category->setTitle($this->faker->catchPhrase());
        });

        $this->createMany(Article::class, 10, function (Article $article) {
            $articleTitle = $this->faker->catchPhrase();
            $article
                ->setUpdatedAt($this->faker->dateTimeBetween("-6 months"))
                ->setContent($this->faker->randomHtml(10))
                ->setTitle($articleTitle)
                ->setSlug($this->slug->slug($articleTitle, '_', 'FR'))
                ->setCategory($this->getRandomreference(Category::class))
                ->setAuthor($this->getRandomreference(User::class));
        });


        $this->createMany(Comment::class, 100, function (Comment $comment) {

            $comment
                ->setAuthor($this->getRandomreference(User::class))
                ->setArticle($this->getRandomreference(Article::class))
                ->setContent($this->faker->paragraph(10));

            if ($this->faker->boolean(10)) {
                $comment->setBlocked($this->getRandomreference(User::class));
            };
        });

        $this->createMany(Like::class, 100, function (Like $like) {
            $like->setArticle($this->getRandomReference(Article::class))->setUser($this->getRandomReference(User::class));
        });

        $this->createMany(Contact::class, 5, function (Contact $contact) {
            $contact
                ->setSender($this->getRandomreference(User::class))
                ->setReceiver($this->getRandomreference(User::class))
                ->setTitle($this->faker->catchPhrase())
                ->setChannel("espace contact")
                ->setContent($this->faker->paragraph(mt_rand(1, 10)));
        });
    }

    public function getDependencies()
    {
        return [UserFixtures::class];
    }
}
