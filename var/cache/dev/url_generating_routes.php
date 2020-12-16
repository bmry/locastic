<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true]], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/docs']], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/contexts']], [], []],
    'api_blogs_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Blog', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/blogs']], [], []],
    'api_blogs_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Blog', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/blogs']], [], []],
    'api_blogs_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Blog', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/blogs']], [], []],
    'api_blogs_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Blog', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/blogs']], [], []],
    'api_users_register_user_collection' => [[], ['_controller' => 'App\\Controller\\Locastic\\User\\RegisterUserControllerAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'register_user'], [], [['text', '/register']], [], []],
    'api_users_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/users']], [], []],
    'api_verification_requests_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/verification_requests']], [], []],
    'api_verification_requests_initiate_verification_collection' => [[], ['_controller' => 'App\\Controller\\Locastic\\VerificationRequest\\InitiateVerificationRequestAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_collection_operation_name' => 'initiate_verification'], [], [['text', '/verification_requests/initiate']], [], []],
    'api_verification_requests_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_item_operation_name' => 'get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/verification_requests']], [], []],
    'api_verification_requests_update_verification_request_item' => [['id'], ['_controller' => 'App\\Controller\\Locastic\\VerificationRequest\\UpdateVerificationRequestAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_item_operation_name' => 'update_verification_request'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/verification_requests']], [], []],
    'api_verification_requests_approve_verification_request_item' => [['id'], ['_controller' => 'App\\Controller\\Locastic\\VerificationRequest\\ApproveVerificationRequestAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_item_operation_name' => 'approve_verification_request'], [], [['text', '/approve'], ['variable', '/', '[^/]++', 'id', true], ['text', '/verification_requests']], [], []],
    'api_verification_requests_decline_verification_request_item' => [['id'], ['_controller' => 'App\\Controller\\Locastic\\VerificationRequest\\DeclineVerificationRequestAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\VerificationRequest', '_api_item_operation_name' => 'decline_verification_request'], [], [['text', '/decline'], ['variable', '/', '[^/]++', 'id', true], ['text', '/verification_requests']], [], []],
    'authentication_token' => [[], [], [], [['text', '/authentication_token']], [], []],
];
