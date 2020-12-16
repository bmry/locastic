<?php

namespace ContainerAeWjmhS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FileLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'nelmio_alice.file_loader' shared service.
     *
     * @return \Nelmio\Alice\Loader\SimpleFileLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FileLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Loader/SimpleFileLoader.php';

        return $container->services['nelmio_alice.file_loader'] = new \Nelmio\Alice\Loader\SimpleFileLoader(($container->privates['nelmio_alice.file_parser.runtime_cache'] ?? $container->load('getNelmioAlice_FileParser_RuntimeCacheService')), ($container->services['nelmio_alice.data_loader'] ?? $container->load('getNelmioAlice_DataLoaderService')));
    }
}
