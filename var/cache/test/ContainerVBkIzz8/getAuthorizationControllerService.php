<?php

namespace ContainerVBkIzz8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorizationControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\AuthorizationController' shared autowired service.
     *
     * @return \App\Controller\AuthorizationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AuthorizationController.php';

        $container->services['App\\Controller\\AuthorizationController'] = $instance = new \App\Controller\AuthorizationController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\AuthorizationController', $container));

        return $instance;
    }
}
