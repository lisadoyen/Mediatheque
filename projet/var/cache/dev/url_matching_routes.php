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
        '/adherent' => [[['_route' => 'adherent_accueil', '_controller' => 'App\\Controller\\Adherent\\MediathequeControllerAdherent::accueilIndex'], null, null, null, false, false, null]],
        '/adherent/bibliotheque/show' => [[['_route' => 'adherent_bibliotheque_show', '_controller' => 'App\\Controller\\Adherent\\MediathequeControllerAdherent::showBibliotheque'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_accueil', '_controller' => 'App\\Controller\\Admin\\MediathequeControllerAdmin::accueilIndex'], null, ['GET' => 0], null, false, false, null]],
        '/admin/bibliotheque/show' => [[['_route' => 'admin_bibliotheque_show', '_controller' => 'App\\Controller\\Admin\\MediathequeControllerAdmin::showBibliotheque'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user', '_controller' => 'App\\Controller\\Admin\\UserController::accueilIndex'], null, null, null, false, false, null]],
        '/benevole' => [[['_route' => 'benevole_accueil', '_controller' => 'App\\Controller\\Benevole\\MediathequeControllerBenevole::accueilIndex'], null, ['GET' => 0], null, false, false, null]],
        '/benevole/bibliotheque/show' => [[['_route' => 'benevole_bibliotheque_show', '_controller' => 'App\\Controller\\Benevole\\MediathequeControllerBenevole::showBibliotheque'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/searchbar' => [[['_route' => 'searchbar', '_controller' => 'App\\Controller\\SearchBar\\SearchBarController::accueilIndex'], null, ['GET' => 0], null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\Security\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\Security\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\Security\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/adherent/bibliotheque/show/genre/([^/]++)(*:211)'
                .'|/searchbar(?:/([^/]++))?(*:243)'
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
        211 => [[['_route' => 'adherent_bibliotheque_show_genre', '_controller' => 'App\\Controller\\Adherent\\MediathequeControllerAdherent::showBibliothequeByType'], ['id'], ['GET' => 0], null, false, true, null]],
        243 => [
            [['_route' => 'searchbar_mot', 'mot' => '', '_controller' => 'App\\Controller\\SearchBar\\SearchBarController::showSearchBar'], ['mot'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
