<?php

namespace App\Security;


use App\Exception\Blog\BlogNotFoundInvalidAccessTokenException;
use App\Validation\AccessTokenValidator;
use Lexik\Bundle\JWTAuthenticationBundle\Encoder\JWTEncoderInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;

class ApiGuardAuthenticator extends AbstractGuardAuthenticator
{
    private $encoder;

    private $accessTokenValidator;

    public function __construct(JWTEncoderInterface $encoder, AccessTokenValidator $accessTokenValidator)
    {
        $this->encoder = $encoder;
        $this->accessTokenValidator = $accessTokenValidator;
    }

    public function start(Request $request, AuthenticationException $authException = null)
    {
        $data = [
            // you may want to customize or obfuscate the message first
            'message' => "Authentication required"
        ];

        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }

    public function supports(Request $request)
    {
        return $request->headers->has('Authorization');
    }

    public function getCredentials(Request $request)
    {
        return $request->headers->get('Authorization');
    }

    public function getUser($credentials, UserProviderInterface $userProvider): ?UserInterface
    {
        $bearer = explode(' ', $credentials);
        $token = $bearer[1];

        try{
            return $this->accessTokenValidator->validate($token);

        }catch (BlogNotFoundInvalidAccessTokenException $exception){

            return null;
        }

    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        return true;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        $data = [
            // you may want to customize or obfuscate the message first
            'message' => "Invalid Credential"

            // or to translate this message
            // $this->translator->trans($exception->getMessageKey(), $exception->getMessageData())
        ];

        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        return null;
    }

    public function supportsRememberMe()
    {
        return false;
    }
}
