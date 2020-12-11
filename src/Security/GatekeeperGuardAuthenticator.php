<?php


namespace App\Security;

use App\Entity\User;
use App\Exception\Blog\BlogNotFoundException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;

class GatekeeperGuardAuthenticator extends AbstractGuardAuthenticator
{
    private $em;

    private $passwordEncoder;

    public function __construct(
        EntityManagerInterface $em,
        UserPasswordEncoderInterface $passwordEncoder
    )
    {
        $this->em = $em;
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * Called on every request to decide if this authenticator should be
     * used for the request. Returning `false` will cause this authenticator
     * to be skipped.
     */
    public function supports(Request $request)
    {
        return true;
    }

    /**
     * Called on every request. Return whatever credentials you want to
     * be passed to getUser() as $credentials.
     */
    public function getCredentials(Request $request)
    {
        $email = $request->request->get('email');
        $password = $request->request->get('password');
        $credential = [
               'email' =>  $email,
               'password' => $password
        ];


        return $credential;
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        try {
            if (null === $credentials['email']) {
                return null;
            }

            return $userProvider->loadUserByUsername($credentials['email']);
        }catch (\Exception $exception){

            throw new AuthenticationException();
        }
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        if($this->passwordEncoder->isPasswordValid($user, $credentials['password'])){
            return true;
        }

        return false;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        // on success, let the request continue
        return null;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {


        $data = [
            'message' => "Invalid Credential"
        ];

        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }

    /**
     * Called when authentication is needed, but it's not sent
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        $data = [
            'message' => 'Authentication Required'
        ];

        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }

    public function supportsRememberMe()
    {
        return false;
    }
}
