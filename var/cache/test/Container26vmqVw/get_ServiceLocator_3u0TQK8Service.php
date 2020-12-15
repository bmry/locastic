<?php

namespace Container26vmqVw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3u0TQK8Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.3u0TQK8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3u0TQK8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'blogRepository' => ['privates', 'App\\Repository\\BlogRepository', 'getBlogRepositoryService', true],
        ], [
            'blogRepository' => 'App\\Repository\\BlogRepository',
        ]);
    }
}
