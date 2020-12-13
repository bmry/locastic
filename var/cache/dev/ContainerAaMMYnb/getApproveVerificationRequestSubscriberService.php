<?php

namespace ContainerAaMMYnb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApproveVerificationRequestSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\ApproveVerificationRequestSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\ApproveVerificationRequestSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventSubscriber/ApproveVerificationRequestSubscriber.php';

        return $container->privates['App\\EventSubscriber\\ApproveVerificationRequestSubscriber'] = new \App\EventSubscriber\ApproveVerificationRequestSubscriber(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Service\\LocasticMailer'] ?? $container->load('getLocasticMailerService')), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
