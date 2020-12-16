<?php

namespace ContainerNzaCUt6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Instantiator_Chainable_NoMethodCallInstantiatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.instantiator.chainable.no_method_call_instantiator' shared service.
     *
     * @return \Nelmio\Alice\Generator\Instantiator\Chainable\NoMethodCallInstantiator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/InstantiatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/ChainableInstantiatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/AbstractChainableInstantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/NoMethodCallInstantiator.php';

        return $container->privates['nelmio_alice.generator.instantiator.chainable.no_method_call_instantiator'] = new \Nelmio\Alice\Generator\Instantiator\Chainable\NoMethodCallInstantiator();
    }
}
