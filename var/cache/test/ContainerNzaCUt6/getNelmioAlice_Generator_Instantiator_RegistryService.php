<?php

namespace ContainerNzaCUt6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Instantiator_RegistryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.instantiator.registry' shared service.
     *
     * @return \Nelmio\Alice\Generator\Instantiator\InstantiatorRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/InstantiatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/InstantiatorRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/ChainableInstantiatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/AbstractChainableInstantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/NullConstructorInstantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/NoMethodCallInstantiator.php';

        return $container->privates['nelmio_alice.generator.instantiator.registry'] = new \Nelmio\Alice\Generator\Instantiator\InstantiatorRegistry([0 => ($container->privates['nelmio_alice.generator.instantiator.chainable.no_caller_method_instantiator'] ?? $container->load('getNelmioAlice_Generator_Instantiator_Chainable_NoCallerMethodInstantiatorService')), 1 => ($container->privates['nelmio_alice.generator.instantiator.chainable.null_constructor_instantiator'] ?? ($container->privates['nelmio_alice.generator.instantiator.chainable.null_constructor_instantiator'] = new \Nelmio\Alice\Generator\Instantiator\Chainable\NullConstructorInstantiator())), 2 => ($container->privates['nelmio_alice.generator.instantiator.chainable.no_method_call_instantiator'] ?? ($container->privates['nelmio_alice.generator.instantiator.chainable.no_method_call_instantiator'] = new \Nelmio\Alice\Generator\Instantiator\Chainable\NoMethodCallInstantiator())), 3 => ($container->privates['nelmio_alice.generator.instantiator.chainable.static_factory_instantiator'] ?? $container->load('getNelmioAlice_Generator_Instantiator_Chainable_StaticFactoryInstantiatorService')), 4 => ($container->privates['hautelook_alice.alice.generator.instantiator.chainable.instantiated_reference_instantiator'] ?? $container->load('getHautelookAlice_Alice_Generator_Instantiator_Chainable_InstantiatedReferenceInstantiatorService'))]);
    }
}
