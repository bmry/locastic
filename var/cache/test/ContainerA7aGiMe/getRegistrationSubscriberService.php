<?php

namespace ContainerA7aGiMe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationSubscriberService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\RegistrationSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\RegistrationSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventSubscriber/RegistrationSubscriber.php';

        return $container->privates['App\\EventSubscriber\\RegistrationSubscriber'] = new \App\EventSubscriber\RegistrationSubscriber(($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Validation\\RegistrationValidator'] ?? $container->load('getRegistrationValidatorService')));
    }
}
