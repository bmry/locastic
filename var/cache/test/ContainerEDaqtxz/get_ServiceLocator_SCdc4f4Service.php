<?php

namespace ContainerEDaqtxz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SCdc4f4Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.SCdc4f4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SCdc4f4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'accessTokenValidator' => ['privates', 'App\\Validation\\AccessTokenValidator', NULL, 'Cannot autowire service "App\\Validation\\AccessTokenValidator": argument "$appClientRepository" of method "__construct()" has type "App\\Validation\\AppClientRepository" but this class was not found.'],
        ], [
            'accessTokenValidator' => 'App\\Validation\\AccessTokenValidator',
        ]);
    }
}
