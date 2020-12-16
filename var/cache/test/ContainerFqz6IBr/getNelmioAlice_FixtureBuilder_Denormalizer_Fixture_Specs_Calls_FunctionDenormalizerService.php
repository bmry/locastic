<?php

namespace ContainerFqz6IBr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Calls_FunctionDenormalizerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.function_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\FunctionDenormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/CallsDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Calls/FunctionDenormalizer.php';

        return $container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.function_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\FunctionDenormalizer(($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer'] ?? $container->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Arguments_SimpleArgumentsDenormalizerService')));
    }
}
