<?php

namespace ContainerRQYVhKR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterUserControllerActionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\Locastic\User\RegisterUserControllerAction' shared autowired service.
     *
     * @return \App\Controller\Locastic\User\RegisterUserControllerAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Locastic/User/RegisterUserControllerAction.php';

        return $container->services['App\\Controller\\Locastic\\User\\RegisterUserControllerAction'] = new \App\Controller\Locastic\User\RegisterUserControllerAction();
    }
}
