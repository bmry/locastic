<?php

namespace ContainerA7aGiMe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_Denormalizer_SimpleService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.denormalizer.simple' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\SimpleDenormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/SimpleDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/ParameterBagDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Parameter/SimpleParameterBagDenormalizer.php';

        return $container->privates['nelmio_alice.fixture_builder.denormalizer.simple'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\SimpleDenormalizer(($container->privates['nelmio_alice.fixture_builder.denormalizer.parameter.simple_parameter_bag_denormalizer'] ?? ($container->privates['nelmio_alice.fixture_builder.denormalizer.parameter.simple_parameter_bag_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Parameter\SimpleParameterBagDenormalizer())), ($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.simple_fixture_bag_denormalizer'] ?? $container->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_SimpleFixtureBagDenormalizerService')));
    }
}
