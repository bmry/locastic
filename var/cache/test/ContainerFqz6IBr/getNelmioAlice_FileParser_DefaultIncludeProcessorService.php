<?php

namespace ContainerFqz6IBr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FileParser_DefaultIncludeProcessorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.file_parser.default_include_processor' shared service.
     *
     * @return \Nelmio\Alice\Parser\IncludeProcessor\DefaultIncludeProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/IncludeProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/IncludeProcessor/DefaultIncludeProcessor.php';

        return $container->privates['nelmio_alice.file_parser.default_include_processor'] = new \Nelmio\Alice\Parser\IncludeProcessor\DefaultIncludeProcessor(($container->privates['hautelook_alice.alice.file_locator.kernel'] ?? $container->load('getHautelookAlice_Alice_FileLocator_KernelService')));
    }
}
