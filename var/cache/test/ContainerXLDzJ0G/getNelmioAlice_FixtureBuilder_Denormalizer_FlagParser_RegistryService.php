<?php

namespace ContainerXLDzJ0G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_RegistryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.denormalizer.flag_parser.registry' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\FlagParserRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/FlagParserRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/ChainableFlagParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/Chainable/ConfiguratorFlagParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/Chainable/ExtendFlagParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/Chainable/OptionalFlagParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/Chainable/TemplateFlagParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/Chainable/UniqueFlagParser.php';

        return $container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.registry'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\FlagParserRegistry([0 => ($container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.configurator'] ?? ($container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.configurator'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\ConfiguratorFlagParser())), 1 => ($container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.extend'] ?? ($container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.extend'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\ExtendFlagParser())), 2 => ($container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.optional'] ?? ($container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.optional'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\OptionalFlagParser())), 3 => ($container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.template'] ?? ($container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.template'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\TemplateFlagParser())), 4 => ($container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.unique'] ?? ($container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.unique'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\UniqueFlagParser()))]);
    }
}
