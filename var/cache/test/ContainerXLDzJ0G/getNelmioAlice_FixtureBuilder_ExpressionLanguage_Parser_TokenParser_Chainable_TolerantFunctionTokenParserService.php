<?php

namespace ContainerXLDzJ0G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_TolerantFunctionTokenParserService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.tolerant_function_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\TolerantFunctionTokenParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/ChainableTokenParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/ParserAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/AbstractChainableParserAwareParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/TolerantFunctionTokenParser.php';

        return $container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.tolerant_function_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\TolerantFunctionTokenParser(($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.identity_token_parser'] ?? $container->load('getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_IdentityTokenParserService')));
    }
}
