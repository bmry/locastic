<?php

namespace ContainerAaMMYnb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CTIhc_NService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cTIhc.n' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cTIhc.n'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'verificationRequestRepository' => ['privates', 'App\\Repository\\VerificationRequestRepository', 'getVerificationRequestRepositoryService', true],
            'verificationRequestValidator' => ['privates', '.errored..service_locator.cTIhc.n.App\\Validation\\VerificationRequest\\InitiateVerificationRequestValidator', NULL, 'Cannot autowire service ".service_locator.cTIhc.n": it references class "App\\Validation\\VerificationRequest\\InitiateVerificationRequestValidator" but no such service exists.'],
        ], [
            'eventDispatcher' => '?',
            'logger' => '?',
            'security' => '?',
            'verificationRequestRepository' => 'App\\Repository\\VerificationRequestRepository',
            'verificationRequestValidator' => 'App\\Validation\\VerificationRequest\\InitiateVerificationRequestValidator',
        ]);
    }
}
