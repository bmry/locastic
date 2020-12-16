<?php

namespace ContainerNzaCUt6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_SuccessHandler_Main_JsonLoginService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authentication.success_handler.main.json_login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php';

        return $container->privates['security.authentication.success_handler.main.json_login'] = new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(($container->privates['lexik_jwt_authentication.handler.authentication_success'] ?? $container->load('getLexikJwtAuthentication_Handler_AuthenticationSuccessService')), [], 'main');
    }
}
