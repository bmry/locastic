<?php

namespace ContainerEDaqtxz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E4ih1jgService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.e4ih1jg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.e4ih1jg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'encoder' => ['services', 'lexik_jwt_authentication.encoder', 'getLexikJwtAuthentication_EncoderService', true],
            'tokenRequestValidator' => ['privates', 'App\\Validation\\AccessTokenRequestValidator', NULL, 'Cannot autowire service "App\\Validation\\AccessTokenRequestValidator": argument "$appClientRepository" of method "__construct()" has type "App\\Validation\\MicroserviceRepository" but this class was not found.'],
        ], [
            'encoder' => '?',
            'tokenRequestValidator' => 'App\\Validation\\AccessTokenRequestValidator',
        ]);
    }
}
