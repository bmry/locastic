<?php

namespace ContainerP8a7gyt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ADz1WHKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aDz1WHK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aDz1WHK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'data' => ['privates', '.errored..service_locator.aDz1WHK.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.aDz1WHK": it references class "App\\Entity\\User" but no such service exists.'],
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
        ], [
            'data' => 'App\\Entity\\User',
            'eventDispatcher' => '?',
        ]);
    }
}
