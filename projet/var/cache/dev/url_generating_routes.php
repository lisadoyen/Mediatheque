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
    'adherent_accueil' => [[], ['_controller' => 'App\\Controller\\Adherent\\MediathequeControllerAdherent::accueilIndex'], [], [['text', '/adherent']], [], []],
    'adherent_bibliotheque_show' => [[], ['_controller' => 'App\\Controller\\Adherent\\MediathequeControllerAdherent::showBibliotheque'], [], [['text', '/adherent/bibliotheque/show']], [], []],
    'adherent_bibliotheque_show_genre' => [['id'], ['_controller' => 'App\\Controller\\Adherent\\MediathequeControllerAdherent::showBibliothequeByType'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adherent/bibliotheque/show/genre']], [], []],
    'admin_accueil' => [[], ['_controller' => 'App\\Controller\\Admin\\MediathequeControllerAdmin::accueilIndex'], [], [['text', '/admin']], [], []],
    'admin_bibliotheque_show' => [[], ['_controller' => 'App\\Controller\\Admin\\MediathequeControllerAdmin::showBibliotheque'], [], [['text', '/admin/bibliotheque/show']], [], []],
    'admin_user' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::accueilIndex'], [], [['text', '/admin/user']], [], []],
    'benevole_accueil' => [[], ['_controller' => 'App\\Controller\\Benevole\\MediathequeControllerBenevole::accueilIndex'], [], [['text', '/benevole']], [], []],
    'benevole_bibliotheque_show' => [[], ['_controller' => 'App\\Controller\\Benevole\\MediathequeControllerBenevole::showBibliotheque'], [], [['text', '/benevole/bibliotheque/show']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/']], [], []],
    'searchbar' => [[], ['_controller' => 'App\\Controller\\SearchBar\\SearchBarController::accueilIndex'], [], [['text', '/searchbar']], [], []],
    'searchbar_mot' => [['mot'], ['mot' => '', '_controller' => 'App\\Controller\\SearchBar\\SearchBarController::showSearchBar'], [], [['variable', '/', '[^/]++', 'mot', true], ['text', '/searchbar']], [], []],
    'security_registration' => [[], ['_controller' => 'App\\Controller\\Security\\SecurityController::registration'], [], [['text', '/inscription']], [], []],
    'security_login' => [[], ['_controller' => 'App\\Controller\\Security\\SecurityController::login'], [], [['text', '/connexion']], [], []],
    'security_logout' => [[], ['_controller' => 'App\\Controller\\Security\\SecurityController::logout'], [], [['text', '/deconnexion']], [], []],
];
