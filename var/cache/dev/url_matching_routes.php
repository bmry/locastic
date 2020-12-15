<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'api_users_register_user_collection', '_controller' => 'App\\Controller\\Locastic\\User\\RegisterUserControllerAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'register_user'], null, ['POST' => 0], null, false, false, null]],
        '/verification_requests/initiate' => [[['_route' => 'api_verification_requests_initiate_verification_collection', '_controller' => 'App\\Controller\\Locastic\\VerificationRequest\\InitiateVerificationRequestAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_collection_operation_name' => 'initiate_verification'], null, ['POST' => 0], null, false, false, null]],
        '/authentication_token' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/(index)?(?:\\.([^/]++))?(*:193)'
                .'|/docs(?:\\.([^/]++))?(*:221)'
                .'|/contexts/(.+)(?:\\.([^/]++))?(*:258)'
                .'|/blogs(?'
                    .'|(?:\\.([^/]++))?(?'
                        .'|(*:293)'
                    .')'
                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                        .'|(*:331)'
                    .')'
                .')'
                .'|/verification_requests(?'
                    .'|(?:\\.([^/]++))?(*:381)'
                    .'|/([^/]++)(?'
                        .'|(*:401)'
                        .'|/(?'
                            .'|approve(*:420)'
                            .'|decline(*:435)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        221 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        258 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        293 => [
            [['_route' => 'api_blogs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Blog', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_blogs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Blog', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        331 => [
            [['_route' => 'api_blogs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Blog', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_blogs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Blog', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        381 => [[['_route' => 'api_verification_requests_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        401 => [
            [['_route' => 'api_verification_requests_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_verification_requests_update_verification_request_item', '_controller' => 'App\\Controller\\Locastic\\VerificationRequest\\UpdateVerificationRequestAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_item_operation_name' => 'update_verification_request'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        420 => [[['_route' => 'api_verification_requests_approve_verification_request_item', '_controller' => 'App\\Controller\\Locastic\\VerificationRequest\\ApproveVerificationRequestAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_item_operation_name' => 'approve_verification_request'], ['id'], ['GET' => 0], null, false, false, null]],
        435 => [
            [['_route' => 'api_verification_requests_decline_verification_request_item', '_controller' => 'App\\Controller\\Locastic\\VerificationRequest\\DeclineVerificationRequestAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_item_operation_name' => 'decline_verification_request'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
