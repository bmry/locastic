<?php

namespace ContainerI76gbrv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHautelookAlice_LoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'hautelook_alice.loader' shared service.
     *
     * @return \Hautelook\AliceBundle\Loader\DoctrineOrmLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Loader/DoctrineOrmLoader.php';

        return $container->services['hautelook_alice.loader'] = new \Hautelook\AliceBundle\Loader\DoctrineOrmLoader(($container->services['hautelook_alice.resolver.bundle'] ?? $container->load('getHautelookAlice_Resolver_BundleService')), ($container->services['hautelook_alice.locator'] ?? $container->load('getHautelookAlice_LocatorService')), ($container->services['hautelook_alice.data_fixtures.purge_loader'] ?? $container->load('getHautelookAlice_DataFixtures_PurgeLoaderService')), ($container->services['hautelook_alice.data_fixtures.append_loader'] ?? $container->load('getHautelookAlice_DataFixtures_AppendLoaderService')), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
