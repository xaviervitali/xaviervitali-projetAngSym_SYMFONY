<?php

namespace App\JWTSubscriber;

use App\Entity\User;
use Lexik\Bundle\JWTAuthenticationBundle\Events;
use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTCreatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class JwtDataSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
            Events::JWT_CREATED => "addInfo"
        ];
    }

    public function addInfo(JWTCreatedEvent $event)
    {

        $user = $event->getUser();
        $data = $event->getData();

        $data['id'] = $user->getId();
        $data["firstName"] = $user
            ->getFirstName();
        $data["lastName"] = $user
            ->getLastName();

        $data["gender"] = $user
            ->getGender();
        $data["children"] = $user
            ->getChildren();

        $data["emailNotification"] = $user
            ->getEmailNotification();

        $event->setData($data);
    }
}
