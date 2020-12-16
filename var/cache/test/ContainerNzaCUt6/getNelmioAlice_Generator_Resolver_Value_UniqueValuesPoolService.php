<?php

namespace ContainerNzaCUt6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Resolver_Value_UniqueValuesPoolService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.resolver.value.unique_values_pool' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\UniqueValuesPool
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/UniqueValuesPool.php';

        return $container->privates['nelmio_alice.generator.resolver.value.unique_values_pool'] = new \Nelmio\Alice\Generator\Resolver\UniqueValuesPool();
    }
}
