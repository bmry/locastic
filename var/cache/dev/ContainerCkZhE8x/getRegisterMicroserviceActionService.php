<?php

namespace ContainerCkZhE8x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterMicroserviceActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Gatekeeper\Microservices\RegisterMicroserviceAction' shared autowired service.
     *
     * @return \App\Controller\Gatekeeper\Microservices\RegisterMicroserviceAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Gatekeeper/Microservices/RegisterMicroserviceAction.php';

        return $container->services['App\\Controller\\Gatekeeper\\Microservices\\RegisterMicroserviceAction'] = new \App\Controller\Gatekeeper\Microservices\RegisterMicroserviceAction();
    }
}
