<?php

namespace ContainerCkZhE8x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C5iIMJ9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.c5iIMJ9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.c5iIMJ9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'data' => ['privates', '.errored..service_locator.c5iIMJ9.App\\Entity\\Microservice', NULL, 'Cannot autowire service ".service_locator.c5iIMJ9": it references class "App\\Entity\\Microservice" but no such service exists.'],
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
        ], [
            'data' => 'App\\Entity\\Microservice',
            'eventDispatcher' => '?',
        ]);
    }
}
