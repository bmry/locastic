<?php

namespace ContainerXLDzJ0G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_NamedArgumentsResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.named_arguments_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\NamedArgumentsResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/NamedArgumentsResolver.php';

        return $container->privates['nelmio_alice.generator.named_arguments_resolver'] = new \Nelmio\Alice\Generator\NamedArgumentsResolver();
    }
}
