<?php

namespace App\Doctrine\Listener;

use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserPasswordListener
{
    protected  $encoder;


    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function prePersist(User $user)
    {
        $encoded = $this->encoder->encodePassword($user, $user->getPassword());
        $user->setPassword($encoded);
    }
}
