<?php

namespace ContainerXLDzJ0G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInitiateVerificationRequestValidatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Validation\VerificationRequest\InitiateVerificationRequestValidator' shared autowired service.
     *
     * @return \App\Validation\VerificationRequest\InitiateVerificationRequestValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Validation/VerificationRequest/InitiateVerificationRequestValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Validation/VerificationRequest/VerificationRequestParameterValidator.php';

        return $container->privates['App\\Validation\\VerificationRequest\\InitiateVerificationRequestValidator'] = new \App\Validation\VerificationRequest\InitiateVerificationRequestValidator(($container->privates['App\\Validation\\VerificationRequest\\NonDuplicateVerificationRequestValidator'] ?? $container->load('getNonDuplicateVerificationRequestValidatorService')), ($container->privates['App\\Validation\\VerificationRequest\\VerificationRequestParameterValidator'] ?? ($container->privates['App\\Validation\\VerificationRequest\\VerificationRequestParameterValidator'] = new \App\Validation\VerificationRequest\VerificationRequestParameterValidator())));
    }
}
