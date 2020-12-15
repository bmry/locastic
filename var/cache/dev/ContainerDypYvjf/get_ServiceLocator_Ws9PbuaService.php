<?php

namespace ContainerDypYvjf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ws9PbuaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ws9Pbua' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ws9Pbua'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'data' => ['privates', '.errored..service_locator.ws9Pbua.App\\Entity\\VerificationRequest', NULL, 'Cannot autowire service ".service_locator.ws9Pbua": it references class "App\\Entity\\VerificationRequest" but no such service exists.'],
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
        ], [
            'data' => 'App\\Entity\\VerificationRequest',
            'eventDispatcher' => '?',
        ]);
    }
}
