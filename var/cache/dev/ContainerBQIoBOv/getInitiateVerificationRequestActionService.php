<?php

namespace ContainerBQIoBOv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInitiateVerificationRequestActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Locastic\VerificationRequest\InitiateVerificationRequestAction' shared autowired service.
     *
     * @return \App\Controller\Locastic\VerificationRequest\InitiateVerificationRequestAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Locastic/VerificationRequest/InitiateVerificationRequestAction.php';

        return $container->services['App\\Controller\\Locastic\\VerificationRequest\\InitiateVerificationRequestAction'] = new \App\Controller\Locastic\VerificationRequest\InitiateVerificationRequestAction();
    }
}
