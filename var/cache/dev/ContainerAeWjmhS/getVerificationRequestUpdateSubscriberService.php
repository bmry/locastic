<?php

namespace ContainerAeWjmhS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVerificationRequestUpdateSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\VerificationRequestUpdateSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\VerificationRequestUpdateSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventSubscriber/VerificationRequestUpdateSubscriber.php';
        include_once \dirname(__DIR__, 4).'/src/Service/Base64StringToImageCoverter.php';

        return $container->privates['App\\EventSubscriber\\VerificationRequestUpdateSubscriber'] = new \App\EventSubscriber\VerificationRequestUpdateSubscriber(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['App\\Service\\FileUploader'] ?? $container->load('getFileUploaderService')), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->privates['App\\Service\\Base64StringToImageCoverter'] ?? ($container->privates['App\\Service\\Base64StringToImageCoverter'] = new \App\Service\Base64StringToImageCoverter(($container->services['kernel'] ?? $container->get('kernel', 1))))));
    }
}
