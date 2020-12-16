<?php

namespace ContainerBQIoBOv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Command_MappingListClassesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'vich_uploader.command.mapping_list_classes' shared service.
     *
     * @return \Vich\UploaderBundle\Command\MappingListClassesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Command/MappingListClassesCommand.php';

        $container->privates['vich_uploader.command.mapping_list_classes'] = $instance = new \Vich\UploaderBundle\Command\MappingListClassesCommand(($container->privates['vich_uploader.metadata_reader'] ?? $container->getVichUploader_MetadataReaderService()));

        $instance->setName('vich:mapping:list-classes');

        return $instance;
    }
}
