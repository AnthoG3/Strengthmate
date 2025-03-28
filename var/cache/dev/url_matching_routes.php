<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\Admin\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/forgot-password' => [[['_route' => 'admin_forgot_password', '_controller' => 'App\\Controller\\Admin\\AdminForgotPasswordController::forgotPassword'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin_login', '_controller' => 'App\\Controller\\Admin\\AdminLoginController::login'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'admin_logout', '_controller' => 'App\\Controller\\Admin\\AdminLoginController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/mentions-legales' => [[['_route' => 'app_mentions', '_controller' => 'App\\Controller\\LegalController::mentions'], null, null, null, false, false, null]],
        '/conditions-utilisation' => [[['_route' => 'app_cgu', '_controller' => 'App\\Controller\\LegalController::cgu'], null, null, null, false, false, null]],
        '/presentation' => [[['_route' => 'app_presentation_index', '_controller' => 'App\\Controller\\PresentationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/suivis' => [[['_route' => 'app_suivis_index', '_controller' => 'App\\Controller\\SuivisController::index'], null, ['GET' => 0], null, false, false, null]],
        '/temoignages' => [[['_route' => 'app_temoignages_index', '_controller' => 'App\\Controller\\TemoignagesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|([^/]++)/(?'
                        .'|create(*:230)'
                        .'|([^/]++)/(?'
                            .'|show(*:254)'
                            .'|edit(*:266)'
                            .'|delete(*:280)'
                        .')'
                    .')'
                    .'|reset\\-password/([^/]++)(*:314)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        230 => [[['_route' => 'app_admin_entity_create', '_controller' => 'App\\Controller\\Admin\\AdminDashboardController::createEntity'], ['entityType'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        254 => [[['_route' => 'app_admin_entity_show', '_controller' => 'App\\Controller\\Admin\\AdminDashboardController::showEntity'], ['entityType', 'id'], ['GET' => 0], null, false, false, null]],
        266 => [[['_route' => 'app_admin_entity_edit', '_controller' => 'App\\Controller\\Admin\\AdminDashboardController::editEntity'], ['entityType', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        280 => [[['_route' => 'app_admin_entity_delete', '_controller' => 'App\\Controller\\Admin\\AdminDashboardController::deleteEntity'], ['entityType', 'id'], ['POST' => 0], null, false, false, null]],
        314 => [
            [['_route' => 'admin_reset_password', '_controller' => 'App\\Controller\\Admin\\AdminForgotPasswordController::resetPassword'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
