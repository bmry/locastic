<?php

namespace ContainerK3sHzsJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetVerificationRequestActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Locastic\VerificationRequest\GetVerificationRequestAction' shared autowired service.
     *
     * @return \App\Controller\Locastic\VerificationRequest\GetVerificationRequestAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Locastic/VerificationRequest/GetVerificationRequestAction.php';

        return $container->services['App\\Controller\\Locastic\\VerificationRequest\\GetVerificationRequestAction'] = new \App\Controller\Locastic\VerificationRequest\GetVerificationRequestAction();
    }
}
