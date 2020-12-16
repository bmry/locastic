<?php

namespace ContainerA7aGiMe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHautelookAlice_Console_Command_Doctrine_DoctrineOrmLoadDataFixturesCommandService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command' shared service.
     *
     * @return \Hautelook\AliceBundle\Console\Command\Doctrine\DoctrineOrmLoadDataFixturesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Console/Command/Doctrine/DoctrineOrmLoadDataFixturesCommand.php';

        $container->services['hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command'] = $instance = new \Hautelook\AliceBundle\Console\Command\Doctrine\DoctrineOrmLoadDataFixturesCommand('hautelook:fixtures:load', ($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->services['hautelook_alice.loader'] ?? $container->load('getHautelookAlice_LoaderService')));

        $instance->setName('hautelook:fixtures:load');

        return $instance;
    }
}
