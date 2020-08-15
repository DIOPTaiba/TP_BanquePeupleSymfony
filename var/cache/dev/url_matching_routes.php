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
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/AccueilResponsable' => [[['_route' => 'accueil_responsable', '_controller' => 'App\\Controller\\AccueilResponsableController::index'], null, null, null, false, false, null]],
        '/ClientMoral/liste' => [[['_route' => 'liste_client_moral', '_controller' => 'App\\Controller\\ClientMoralController::index'], null, null, null, false, false, null]],
        '/ClientMoral/add' => [[['_route' => 'add_client_moral', '_controller' => 'App\\Controller\\ClientMoralController::addClientSalarie'], null, null, null, false, false, null]],
        '/ClientMoral/existant' => [[['_route' => 'recherche_client_moral', '_controller' => 'App\\Controller\\ClientMoralController::rechercheClientMoral'], null, null, null, false, false, null]],
        '/ClientNonSalarie/liste' => [[['_route' => 'liste_client_non_salarie', '_controller' => 'App\\Controller\\ClientNonSalarieController::index'], null, null, null, false, false, null]],
        '/ClientNonSalarie/add' => [[['_route' => 'add_client_non_salarie', '_controller' => 'App\\Controller\\ClientNonSalarieController::addClientNonSalarie'], null, null, null, false, false, null]],
        '/ClientNonSalarie/existant' => [[['_route' => 'recherche_client_non_salarie', '_controller' => 'App\\Controller\\ClientNonSalarieController::rechercheClientNonSalarie'], null, null, null, false, false, null]],
        '/ClientSalarie/liste' => [[['_route' => 'liste_client_salarie', '_controller' => 'App\\Controller\\ClientSalarieController::index'], null, null, null, false, false, null]],
        '/ClientSalarie/add' => [[['_route' => 'add_client_salarie', '_controller' => 'App\\Controller\\ClientSalarieController::addClientSalarie'], null, null, null, false, false, null]],
        '/ClientSalarie/existant' => [[['_route' => 'recherche_client_salarie', '_controller' => 'App\\Controller\\ClientSalarieController::rechercheClientSalarie'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
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
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
