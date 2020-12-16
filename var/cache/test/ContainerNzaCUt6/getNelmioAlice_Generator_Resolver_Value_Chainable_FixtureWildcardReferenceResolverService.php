<?php

namespace ContainerNzaCUt6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Resolver_Value_Chainable_FixtureWildcardReferenceResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.resolver.value.chainable.fixture_wildcard_reference_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixtureWildcardReferenceResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/ChainableValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/FixtureWildcardReferenceResolver.php';

        return $container->privates['nelmio_alice.generator.resolver.value.chainable.fixture_wildcard_reference_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixtureWildcardReferenceResolver();
    }
}
