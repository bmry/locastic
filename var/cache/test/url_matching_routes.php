<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/app-client/new' => [[['_route' => 'app_client_new', '_controller' => 'App\\Controller\\AppClientController::new'], null, null, null, false, false, null]],
        '/api/auth' => [[['_route' => 'app_token', '_controller' => 'App\\Controller\\AuthorizationController::token'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::dashboard'], null, null, null, false, false, null]],
        '/account/verify' => [[['_route' => 'account_verify', '_controller' => 'App\\Controller\\Gatekeeper\\Registration\\VerifyAccountControllerAction::verify'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/api/register_ms_owner' => [[['_route' => 'api_registrations_register_msowner_collection', '_controller' => 'App\\Controller\\Gatekeeper\\Registration\\RegisterMSOwnerControllerAction', '_format' => null, '_api_resource_class' => 'App\\Model\\Registration\\Registration', '_api_collection_operation_name' => 'register_msowner'], null, ['POST' => 0], null, false, false, null]],
        '/api/register_admin' => [[['_route' => 'api_registrations_register_admin_collection', '_controller' => 'App\\Controller\\Gatekeeper\\Registration\\RegisterUserControllerAction', '_format' => null, '_api_resource_class' => 'App\\Model\\Registration\\Registration', '_api_collection_operation_name' => 'register_admin'], null, ['POST' => 0], null, false, false, null]],
        '/api/register_client_admin' => [[['_route' => 'api_registrations_register_client_admin_collection', '_controller' => 'App\\Controller\\Gatekeeper\\Registration\\RegisterClientAdminControllerAction', '_format' => null, '_api_resource_class' => 'App\\Model\\Registration\\Registration', '_api_collection_operation_name' => 'register_client_admin'], null, ['POST' => 0], null, false, false, null]],
        '/api/gk_verify_account' => [[['_route' => 'api_account_verifications_gk_verify_account_item', '_controller' => 'App\\Controller\\Gatekeeper\\Registration\\VerifyAccountControllerAction', '_format' => null, '_api_resource_class' => 'App\\Model\\Registration\\AccountVerification', '_api_item_operation_name' => 'gk_verify_account', '_api_receive' => false], null, ['GET' => 0], null, false, false, null]],
        '/api/gk_register_microservice' => [[['_route' => 'api_microservices_register_microservice_collection', '_controller' => 'App\\Controller\\Gatekeeper\\Microservices\\RegisterMicroserviceAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\Microservice', '_api_collection_operation_name' => 'register_microservice'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DashboardController::dashboard'], null, null, null, false, false, null]],
        '/gk_ms_owner/auth' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:42)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:72)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:107)'
                        .'|users/([^/]++)/assign_scope(*:142)'
                        .'|microservices/([^/]++)/add_scope(*:182)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        107 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        142 => [[['_route' => 'api_scopes_assign_scope_collection', '_controller' => 'App\\Controller\\Gatekeeper\\Scope\\AssignScopeControllerAction', '_format' => null, '_api_resource_class' => 'App\\Model\\Scope', '_api_collection_operation_name' => 'assign_scope'], ['id'], ['POST' => 0], null, false, false, null]],
        182 => [
            [['_route' => 'api_microservice_scopes_add_scope_item', '_controller' => 'App\\Controller\\Gatekeeper\\Microservices\\AddScopeControllerAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\MicroserviceScope', '_api_item_operation_name' => 'add_scope', '_api_receive' => false], ['microserviceId'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
