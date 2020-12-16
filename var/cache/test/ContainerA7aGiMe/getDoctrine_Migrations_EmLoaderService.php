<?php

namespace ContainerA7aGiMe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_EmLoaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.em_loader' shared service.
     *
     * @return \Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/EntityManager/EntityManagerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/EntityManager/ExistingEntityManager.php';

        return $container->privates['doctrine.migrations.em_loader'] = new \Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
