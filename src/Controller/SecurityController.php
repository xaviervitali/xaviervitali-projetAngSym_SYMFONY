<?php

namespace App\Controller;

use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{


    /**
     * @Route("/api/login_token", name="security_login_token", methods={"POST"})
     */
    public function login_token()
    {
    }

    /**
     * @Route("/logout", name="security_logout")
     *
     */
    public function logout()
    {
    }


    /**
     * @Route("/login", name="security_login")
     
     */
    public function login()
    {

        $form = $this->createForm(UserType::class);

        return $this->render('security/login.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
