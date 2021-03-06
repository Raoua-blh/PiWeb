<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'coach' => [[], ['_controller' => 'App\\Controller\\CoachController::index'], [], [['text', '/coach']], [], []],
    'coachAjouter' => [[], ['_controller' => 'App\\Controller\\CoachController::ajouterCoach'], [], [['text', '/coach/ajouter']], [], []],
    'listcoach' => [[], ['_controller' => 'App\\Controller\\CoachController::list'], [], [['text', '/coach/listcoach']], [], []],
    'Supprimercoach' => [['id'], ['_controller' => 'App\\Controller\\CoachController::SupprimerCoach'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Supprimercoach']], [], []],
    'ModifierCoach' => [['id'], ['_controller' => 'App\\Controller\\CoachController::ModifierCoach'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/ModifierCoach']], [], []],
    'service_guide' => [[], ['_controller' => 'App\\Controller\\ServiceGuideController::index'], [], [['text', '/service/guide']], [], []],
    'service_guideAjouter' => [[], ['_controller' => 'App\\Controller\\ServiceGuideController::ajouter'], [], [['text', '/serviceguide/ajouter']], [], []],
    'listService' => [[], ['_controller' => 'App\\Controller\\ServiceGuideController::list'], [], [['text', '/serviceguide/listService']], [], []],
    'SupprimerService' => [['id'], ['_controller' => 'App\\Controller\\ServiceGuideController::SupprimerService'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/SupprimerService']], [], []],
    'ModifierService' => [['id'], ['_controller' => 'App\\Controller\\ServiceGuideController::ModifierService'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/ModifierService']], [], []],
];
