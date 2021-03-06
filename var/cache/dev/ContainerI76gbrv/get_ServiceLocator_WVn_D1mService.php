<?php

namespace ContainerI76gbrv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WVn_D1mService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WVn.d1m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WVn.d1m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'data' => ['privates', '.errored..service_locator.WVn.d1m.App\\Entity\\VerificationRequest', NULL, 'Cannot autowire service ".service_locator.WVn.d1m": it references class "App\\Entity\\VerificationRequest" but no such service exists.'],
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'verificationRequestRepository' => ['privates', 'App\\Repository\\VerificationRequestRepository', 'getVerificationRequestRepositoryService', true],
        ], [
            'data' => 'App\\Entity\\VerificationRequest',
            'eventDispatcher' => '?',
            'logger' => '?',
            'security' => '?',
            'verificationRequestRepository' => 'App\\Repository\\VerificationRequestRepository',
        ]);
    }
}
