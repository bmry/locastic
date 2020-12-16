<?php

namespace ContainerFqz6IBr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Caller_SimpleService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.caller.simple' shared service.
     *
     * @return \Nelmio\Alice\Generator\Caller\SimpleCaller
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/CallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/SimpleCaller.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/NamedArgumentsResolver.php';

        return $container->privates['nelmio_alice.generator.caller.simple'] = new \Nelmio\Alice\Generator\Caller\SimpleCaller(($container->privates['nelmio_alice.generator.caller.registry'] ?? $container->load('getNelmioAlice_Generator_Caller_RegistryService')), ($container->privates['nelmio_alice.generator.resolver.value.registry'] ?? $container->load('getNelmioAlice_Generator_Resolver_Value_RegistryService')), ($container->privates['nelmio_alice.generator.named_arguments_resolver'] ?? ($container->privates['nelmio_alice.generator.named_arguments_resolver'] = new \Nelmio\Alice\Generator\NamedArgumentsResolver())));
    }
}
