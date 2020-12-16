<?php

namespace Container0HXx81T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IEquwsqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iEquwsq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iEquwsq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'base64StringToImageCoverter' => ['privates', 'App\\Service\\Base64StringToImageCoverter', 'getBase64StringToImageCoverterService', true],
            'data' => ['privates', '.errored..service_locator.iEquwsq.App\\Entity\\VerificationRequest', NULL, 'Cannot autowire service ".service_locator.iEquwsq": it references class "App\\Entity\\VerificationRequest" but no such service exists.'],
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'verificationRequestRepository' => ['privates', 'App\\Repository\\VerificationRequestRepository', 'getVerificationRequestRepositoryService', true],
            'verificationRequestValidator' => ['privates', 'App\\Validation\\VerificationRequest\\InitiateVerificationRequestValidator', 'getInitiateVerificationRequestValidatorService', true],
        ], [
            'base64StringToImageCoverter' => 'App\\Service\\Base64StringToImageCoverter',
            'data' => 'App\\Entity\\VerificationRequest',
            'eventDispatcher' => '?',
            'logger' => '?',
            'security' => '?',
            'verificationRequestRepository' => 'App\\Repository\\VerificationRequestRepository',
            'verificationRequestValidator' => 'App\\Validation\\VerificationRequest\\InitiateVerificationRequestValidator',
        ]);
    }
}
