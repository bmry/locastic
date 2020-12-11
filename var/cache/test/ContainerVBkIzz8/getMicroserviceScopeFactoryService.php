<?php

namespace ContainerVBkIzz8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMicroserviceScopeFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Factory\MicroserviceScopeFactory' shared autowired service.
     *
     * @return \App\Factory\MicroserviceScopeFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Factory/MicroserviceScopeFactory.php';

        return $container->privates['App\\Factory\\MicroserviceScopeFactory'] = new \App\Factory\MicroserviceScopeFactory();
    }
}
