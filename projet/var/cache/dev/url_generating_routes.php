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
    'livres_show' => [[], ['_controller' => 'App\\Controller\\Articles\\LivresController::showAll'], [], [['text', '/livres/show']], [], []],
    'get_ISBN' => [[], ['_controller' => 'App\\Controller\\Articles\\LivresController::getISBN'], [], [['text', '/livres/getISBN']], [], []],
    'livres_search_isbn' => [['isbn'], ['_controller' => 'App\\Controller\\Articles\\LivresController::getDataFromIsbn'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/livres/get']], [], []],
    'add_livre' => [[], ['_controller' => 'App\\Controller\\Articles\\LivresController::addLivre'], [], [['text', '/livres/add']], [], []],
    'genres_livres_show' => [[], ['_controller' => 'App\\Controller\\GenreController::showAllGenre'], [], [['text', '/genres/livres']], [], []],
    'genres_id_livres_show' => [['id'], ['_controller' => 'App\\Controller\\GenreController::showOneByGenre'], [], [['text', '/livres'], ['variable', '/', '[^/]++', 'id', true], ['text', '/genres']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/']], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\IndexController::accueil'], [], [['text', '/accueil']], [], []],
    'security_registration' => [[], ['_controller' => 'App\\Controller\\Security\\SecurityController::registration'], [], [['text', '/inscription']], [], []],
    'security_login' => [[], ['_controller' => 'App\\Controller\\Security\\SecurityController::login'], [], [['text', '/connexion']], [], []],
    'security_logout' => [[], ['_controller' => 'App\\Controller\\Security\\SecurityController::logout'], [], [['text', '/deconnexion']], [], []],
    'profil' => [[], ['_controller' => 'App\\Controller\\Users\\ProfilController::index'], [], [['text', '/profil']], [], []],
    'edit_profil' => [[], ['_controller' => 'App\\Controller\\Users\\ProfilController::editProfil'], [], [['text', '/profil/edit']], [], []],
    'edit_password_profil' => [[], ['_controller' => 'App\\Controller\\Users\\ProfilController::editPassword'], [], [['text', '/profil/edit/password']], [], []],
    'favoris' => [[], ['_controller' => 'App\\Controller\\Users\\ProfilController::favoris'], [], [['text', '/favoris']], [], []],
    'panier' => [[], ['_controller' => 'App\\Controller\\Users\\ProfilController::panier'], [], [['text', '/panier']], [], []],
    'users_accueil' => [[], ['_controller' => 'App\\Controller\\Users\\UserController::accueilUser'], [], [['text', '/users']], [], []],
    'users_show' => [[], ['_controller' => 'App\\Controller\\Users\\UserController::showUser'], [], [['text', '/users/show']], [], []],
    'users_add' => [[], ['_controller' => 'App\\Controller\\Users\\UserController::addUser'], [], [['text', '/users/add']], [], []],
];
