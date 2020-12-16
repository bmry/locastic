<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/register' => [[['_route' => 'api_users_register_user_collection', '_controller' => 'App\\Controller\\Locastic\\User\\RegisterUserControllerAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'register_user'], null, ['POST' => 0], null, false, false, null]],
        '/verification_requests/initiate' => [[['_route' => 'api_verification_requests_initiate_verification_collection', '_controller' => 'App\\Controller\\Locastic\\VerificationRequest\\InitiateVerificationRequestAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_collection_operation_name' => 'initiate_verification'], null, ['POST' => 0], null, false, false, null]],
        '/authentication_token' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/(index)?(?:\\.([^/]++))?(*:31)'
                .'|/docs(?:\\.([^/]++))?(*:58)'
                .'|/contexts/(.+)(?:\\.([^/]++))?(*:94)'
                .'|/verification_requests(?'
                    .'|(?:\\.([^/]++))?(*:141)'
                    .'|/([^/]++)(?'
                        .'|(*:161)'
                        .'|/(?'
                            .'|approve(*:180)'
                            .'|decline(*:195)'
                        .')'
                    .')'
                .')'
                .'|/blogs(?'
                    .'|(?:\\.([^/]++))?(?'
                        .'|(*:233)'
                    .')'
                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                        .'|(*:271)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        58 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        94 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        141 => [[['_route' => 'api_verification_requests_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        161 => [
            [['_route' => 'api_verification_requests_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_verification_requests_update_verification_request_item', '_controller' => 'App\\Controller\\Locastic\\VerificationRequest\\UpdateVerificationRequestAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_item_operation_name' => 'update_verification_request'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        180 => [[['_route' => 'api_verification_requests_approve_verification_request_item', '_controller' => 'App\\Controller\\Locastic\\VerificationRequest\\ApproveVerificationRequestAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_item_operation_name' => 'approve_verification_request'], ['id'], ['GET' => 0], null, false, false, null]],
        195 => [[['_route' => 'api_verification_requests_decline_verification_request_item', '_controller' => 'App\\Controller\\Locastic\\VerificationRequest\\DeclineVerificationRequestAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_item_operation_name' => 'decline_verification_request'], ['id'], ['POST' => 0], null, false, false, null]],
        233 => [
            [['_route' => 'api_blogs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Blog', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_blogs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Blog', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        271 => [
            [['_route' => 'api_blogs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Blog', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_blogs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Blog', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
