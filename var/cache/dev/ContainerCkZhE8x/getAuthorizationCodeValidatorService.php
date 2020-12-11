<?php

namespace ContainerCkZhE8x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorizationCodeValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Validation\AuthorizationCodeValidator' shared autowired service.
     *
     * @return \App\Validation\AuthorizationCodeValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Validation/AuthorizationCodeValidator.php';

        return $container->privates['App\\Validation\\AuthorizationCodeValidator'] = new \App\Validation\AuthorizationCodeValidator(($container->services['lexik_jwt_authentication.encoder'] ?? $container->load('getLexikJwtAuthentication_EncoderService')), ($container->privates['App\\Repository\\MicroserviceRepository'] ?? $container->load('getMicroserviceRepositoryService')));
    }
}
