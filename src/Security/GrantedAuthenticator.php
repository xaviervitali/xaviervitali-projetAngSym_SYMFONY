<?php

namespace App\Security;

use Doctrine\DBAL\Types\JsonType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class GrantedAuthenticator extends AbstractGuardAuthenticator

{

    protected  $authenticationSuccessHandlerInterface;
    protected  $authenticationFailureHandlerInterface;
    protected  $encoder;

    public function __construct(AuthenticationSuccessHandlerInterface $authenticationSuccessHandlerInterface, AuthenticationFailureHandlerInterface $authenticationFailureHandlerInterface, UserPasswordEncoderInterface $encoder)
    {
        $this->authenticationFailureHandlerInterface = $authenticationFailureHandlerInterface;
        $this->authenticationSuccessHandlerInterface = $authenticationSuccessHandlerInterface;
        $this->encoder = $encoder;
    }

    public function supports(Request $request)
    {
        return $request->attributes->get("_route") === "security_login_token";
    }

    public function getCredentials(Request $request)
    {
        $json = $request->getContent();
        $data = json_decode($json);
        if ($data === null) {
            return [];
        }
        return $data;
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        if (empty($credentials)) {
            throw new AuthenticationException("Wrong JSON");
        }

        return $userProvider->loadUserByUsername($credentials->username);
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        if (!$this->encoder->isPasswordValid($user, $credentials->password)) {
            throw new AuthenticationException("Bad credentials");
        };

        if (!$user->getGranted()) {
            throw new AuthenticationException("Not Granted");
        }

        return true;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {

        return $this->authenticationFailureHandlerInterface->onAuthenticationFailure($request, $exception);
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        return $this->authenticationSuccessHandlerInterface->onAuthenticationSuccess($request, $token);
    }

    public function start(Request $request, AuthenticationException $authException = null)
    {
    }

    public function supportsRememberMe()
    {
        // todo
    }
}
