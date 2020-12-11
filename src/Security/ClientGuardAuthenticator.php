<?php

namespace App\Security;


use App\Entity\User;
use App\Exception\Blog\BlogNotFoundInvalidAccessTokenException;
use App\Repository\MicroserviceRepository;
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

class ClientGuardAuthenticator extends AbstractGuardAuthenticator
{

    private $microserviceRepository;

    public function __construct(MicroserviceRepository  $microserviceRepository)
    {
        $this->microserviceRepository =  $microserviceRepository;
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
        return $request->attributes->get('_route') === 'api_auths_auth_token_collection';
    }

    public function getCredentials(Request $request)
    {
        return $request->headers->get('Authorization');

    }

    public function getUser($credentials, UserProviderInterface $userProvider): ?UserInterface
    {
        $bearer = explode(' ', $credentials);
        $token = $bearer[1];
        $decodedCredential =  base64_decode($token);
        $decodedCredential  = explode(":", $decodedCredential);
        $clientId = $decodedCredential[0];
        $client = $this->microserviceRepository->findOneBy(['clientId' => $clientId]);

        return   $client->getUser();

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
