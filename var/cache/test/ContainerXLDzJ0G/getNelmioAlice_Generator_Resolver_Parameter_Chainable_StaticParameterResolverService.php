<?php

namespace ContainerXLDzJ0G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Resolver_Parameter_Chainable_StaticParameterResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.resolver.parameter.chainable.static_parameter_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\StaticParameterResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/ParameterResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/ChainableParameterResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Parameter/Chainable/StaticParameterResolver.php';

        return $container->privates['nelmio_alice.generator.resolver.parameter.chainable.static_parameter_resolver'] = new \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\StaticParameterResolver();
    }
}
