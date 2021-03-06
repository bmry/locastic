<?php

namespace ContainerEDaqtxz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H4mPNd4Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.H4mPNd4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H4mPNd4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'data' => ['privates', 'App\\Model\\Registration\\Registration', 'getRegistrationService', true],
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
        ], [
            'data' => 'App\\Model\\Registration\\Registration',
            'eventDispatcher' => '?',
        ]);
    }
}
