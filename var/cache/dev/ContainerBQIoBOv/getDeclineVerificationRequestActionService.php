<?php

namespace ContainerBQIoBOv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeclineVerificationRequestActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Locastic\VerificationRequest\DeclineVerificationRequestAction' shared autowired service.
     *
     * @return \App\Controller\Locastic\VerificationRequest\DeclineVerificationRequestAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Locastic/VerificationRequest/DeclineVerificationRequestAction.php';

        return $container->services['App\\Controller\\Locastic\\VerificationRequest\\DeclineVerificationRequestAction'] = new \App\Controller\Locastic\VerificationRequest\DeclineVerificationRequestAction();
    }
}
