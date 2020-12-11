<?php

namespace ContainerL9jLZrI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMicroserviceOwnerRegistrationValidatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Validation\MicroserviceOwnerRegistrationValidator' shared autowired service.
     *
     * @return \App\Validation\RegistrationValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Validation/MicroserviceOwnerRegistrationValidator.php';

        return $container->privates['App\\Validation\\RegistrationValidator'] = new \App\Validation\RegistrationValidator(($container->services['validator'] ?? $container->getValidatorService()), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['parameter_bag'] ?? ($container->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container))));
    }
}
