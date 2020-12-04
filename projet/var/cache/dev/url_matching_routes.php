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
        '/livres/show' => [[['_route' => 'livres_show', '_controller' => 'App\\Controller\\Articles\\LivresController::showAll'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/livre/filtre/clear' => [[['_route' => 'filter_clear', '_controller' => 'App\\Controller\\Articles\\LivresController::clearFiltrer'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/livres/getISBN' => [[['_route' => 'get_ISBN', '_controller' => 'App\\Controller\\Articles\\LivresController::getISBN'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/livres/add' => [[['_route' => 'add_livre', '_controller' => 'App\\Controller\\Articles\\LivresController::addLivre'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/articles' => [[['_route' => 'operations_articles', '_controller' => 'App\\Controller\\DataBaseController::index'], null, null, null, false, false, null]],
        '/database/articles' => [[['_route' => 'data_base_articles', '_controller' => 'App\\Controller\\DataBaseController::DataBaseArticle'], null, null, null, true, false, null]],
        '/database/users' => [[['_route' => 'data_base_users', '_controller' => 'App\\Controller\\DataBaseController::DataBaseUsers'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\IndexController::accueil'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\Security\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\Security\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\Security\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\Users\\ProfilController::index'], null, null, null, false, false, null]],
        '/profil/edit' => [[['_route' => 'edit_profil', '_controller' => 'App\\Controller\\Users\\ProfilController::editProfil'], null, null, null, false, false, null]],
        '/profil/edit/password' => [[['_route' => 'edit_password_profil', '_controller' => 'App\\Controller\\Users\\ProfilController::editPassword'], null, null, null, false, false, null]],
        '/favoris' => [[['_route' => 'favoris', '_controller' => 'App\\Controller\\Users\\ProfilController::favoris'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\Users\\ProfilController::panier'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'users_accueil', '_controller' => 'App\\Controller\\Users\\UserController::accueilUser'], null, null, null, false, false, null]],
        '/users/show' => [[['_route' => 'users_show', '_controller' => 'App\\Controller\\Users\\UserController::showUser'], null, null, null, false, false, null]],
        '/users/add' => [[['_route' => 'users_add', '_controller' => 'App\\Controller\\Users\\UserController::addUser'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/livres/ge(?'
                    .'|nres/([^/]++)/show(*:200)'
                    .'|t/([^/]++)(*:218)'
                .')'
                .'|/database/([^/]++)/file(*:250)'
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
        200 => [[['_route' => 'genres_id_livres_show', 'id' => null, '_controller' => 'App\\Controller\\Articles\\LivresController::showAll'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        218 => [[['_route' => 'livres_search_isbn', '_controller' => 'App\\Controller\\Articles\\LivresController::getDataFromIsbn'], ['isbn'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        250 => [
            [['_route' => 'data_base_file', 'table' => null, '_controller' => 'App\\Controller\\DataBaseController::backupDataBase'], ['table'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
