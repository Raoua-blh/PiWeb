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
        '/coach' => [[['_route' => 'coach', '_controller' => 'App\\Controller\\CoachController::index'], null, null, null, false, false, null]],
        '/coach/ajouter' => [[['_route' => 'coachAjouter', '_controller' => 'App\\Controller\\CoachController::ajouterCoach'], null, null, null, false, false, null]],
        '/coach/listcoach' => [[['_route' => 'listcoach', '_controller' => 'App\\Controller\\CoachController::list'], null, null, null, false, false, null]],
        '/service/guide' => [[['_route' => 'service_guide', '_controller' => 'App\\Controller\\ServiceGuideController::index'], null, null, null, false, false, null]],
        '/serviceguide/ajouter' => [[['_route' => 'service_guideAjouter', '_controller' => 'App\\Controller\\ServiceGuideController::ajouter'], null, null, null, false, false, null]],
        '/serviceguide/listService' => [[['_route' => 'listService', '_controller' => 'App\\Controller\\ServiceGuideController::list'], null, null, null, false, false, null]],
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
                .'|/Supprimer(?'
                    .'|coach/([^/]++)(*:196)'
                    .'|Service/([^/]++)(*:220)'
                .')'
                .'|/Modifier(?'
                    .'|Coach/([^/]++)(*:255)'
                    .'|Service/([^/]++)(*:279)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'Supprimercoach', '_controller' => 'App\\Controller\\CoachController::SupprimerCoach'], ['id'], null, null, false, true, null]],
        220 => [[['_route' => 'SupprimerService', '_controller' => 'App\\Controller\\ServiceGuideController::SupprimerService'], ['id'], null, null, false, true, null]],
        255 => [[['_route' => 'ModifierCoach', '_controller' => 'App\\Controller\\CoachController::ModifierCoach'], ['id'], null, null, false, true, null]],
        279 => [
            [['_route' => 'ModifierService', '_controller' => 'App\\Controller\\ServiceGuideController::ModifierService'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
