<?php

namespace ContainerVBkIzz8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterAdminControllerActionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\Gatekeeper\Registration\RegisterAdminControllerAction' shared autowired service.
     *
     * @return \App\Controller\Gatekeeper\Registration\RegisterUserControllerAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Gatekeeper/Registration/RegisterAdminControllerAction.php';

        return $container->services['App\\Controller\\Gatekeeper\\Registration\\RegisterUserControllerAction'] = new \App\Controller\Gatekeeper\Registration\RegisterUserControllerAction();
    }
}
