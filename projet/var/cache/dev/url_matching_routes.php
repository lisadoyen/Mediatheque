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
        '/annonce' => [[['_route' => 'annonce_index', '_controller' => 'App\\Controller\\AnnonceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/annonce/new' => [[['_route' => 'annonce_new', '_controller' => 'App\\Controller\\AnnonceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/livres/show' => [[['_route' => 'livres_show', '_controller' => 'App\\Controller\\Articles\\LivresController::showAll'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/livre/filtre/clear' => [[['_route' => 'filter_clear', '_controller' => 'App\\Controller\\Articles\\LivresController::clearFiltrer'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/livres/getISBN' => [[['_route' => 'get_ISBN', '_controller' => 'App\\Controller\\Articles\\LivresController::getISBN'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/livres/add' => [[['_route' => 'add_livre', '_controller' => 'App\\Controller\\Articles\\LivresController::addLivre'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/bdd/transfert' => [[['_route' => 'modifVideold', '_controller' => 'App\\Controller\\Articles\\LivresController::transfertBDD'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/bdd/transfert/entite' => [[['_route' => 'modifEntite', '_controller' => 'App\\Controller\\Articles\\LivresController::transfertEntite'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/testxml' => [[['_route' => 'testxml', '_controller' => 'App\\Controller\\Articles\\LivresController::testxml'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\Articles\\LivresController::test'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/articles' => [[['_route' => 'operations_articles', '_controller' => 'App\\Controller\\DataBaseController::index'], null, null, null, false, false, null]],
        '/database/articles' => [[['_route' => 'data_base_articles', '_controller' => 'App\\Controller\\DataBaseController::DataBaseArticle'], null, null, null, true, false, null]],
        '/database/users' => [[['_route' => 'data_base_users', '_controller' => 'App\\Controller\\DataBaseController::DataBaseUsers'], null, null, null, true, false, null]],
        '/entite' => [[['_route' => 'entite_index', '_controller' => 'App\\Controller\\EntiteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/entite/new' => [[['_route' => 'entite_new', '_controller' => 'App\\Controller\\EntiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/entreprise' => [[['_route' => 'entreprise_index', '_controller' => 'App\\Controller\\EntrepriseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/entreprise/new' => [[['_route' => 'entreprise_new', '_controller' => 'App\\Controller\\EntrepriseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fonction' => [[['_route' => 'fonction_index', '_controller' => 'App\\Controller\\FonctionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/fonction/new' => [[['_route' => 'fonction_new', '_controller' => 'App\\Controller\\FonctionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/genre' => [[['_route' => 'genre_index', '_controller' => 'App\\Controller\\GenreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/genre/new' => [[['_route' => 'genre_new', '_controller' => 'App\\Controller\\GenreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\IndexController::accueil'], null, null, null, false, false, null]],
        '/crud_list' => [[['_route' => 'crud_list', '_controller' => 'App\\Controller\\IndexController::crudlist'], null, null, null, false, false, null]],
        '/lien' => [[['_route' => 'lien_index', '_controller' => 'App\\Controller\\LienController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lien/new' => [[['_route' => 'lien_new', '_controller' => 'App\\Controller\\LienController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rubrique' => [[['_route' => 'rubrique_index', '_controller' => 'App\\Controller\\RubriqueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/rubrique/new' => [[['_route' => 'rubrique_new', '_controller' => 'App\\Controller\\RubriqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\Security\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\Security\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\Security\\SecurityController::logout'], null, null, null, false, false, null]],
        '/tag' => [[['_route' => 'tag_index', '_controller' => 'App\\Controller\\TagController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tag/new' => [[['_route' => 'tag_new', '_controller' => 'App\\Controller\\TagController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/trancheAge' => [[['_route' => 'tranche_age_index', '_controller' => 'App\\Controller\\TrancheAgeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/trancheAge/new' => [[['_route' => 'tranche_age_new', '_controller' => 'App\\Controller\\TrancheAgeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/typeEntite' => [[['_route' => 'type_entite_index', '_controller' => 'App\\Controller\\TypeEntiteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/typeEntite/new' => [[['_route' => 'type_entite_new', '_controller' => 'App\\Controller\\TypeEntiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\Users\\ProfilController::index'], null, null, null, false, false, null]],
        '/profil/MesDonnees' => [[['_route' => 'mes_donnees', '_controller' => 'App\\Controller\\Users\\ProfilController::donneePerso'], null, null, null, false, false, null]],
        '/profil/edit' => [[['_route' => 'edit_profil', '_controller' => 'App\\Controller\\Users\\ProfilController::editProfil'], null, null, null, false, false, null]],
        '/profil/edit/password' => [[['_route' => 'edit_password_profil', '_controller' => 'App\\Controller\\Users\\ProfilController::editPassword'], null, null, null, false, false, null]],
        '/favoris' => [[['_route' => 'favoris', '_controller' => 'App\\Controller\\Users\\ProfilController::favoris'], null, null, null, false, false, null]],
        '/favoris/remove' => [[['_route' => 'remove_all_favoris', '_controller' => 'App\\Controller\\Users\\ProfilController::removeAllFavoris'], null, ['DELETE' => 0], null, false, false, null]],
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\Users\\ProfilController::panier'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'users_accueil', '_controller' => 'App\\Controller\\Users\\UserController::accueilUser'], null, null, null, false, false, null]],
        '/users/show' => [[['_route' => 'users_show', '_controller' => 'App\\Controller\\Users\\UserController::showUser'], null, null, null, false, false, null]],
        '/users/add' => [[['_route' => 'users_add', '_controller' => 'App\\Controller\\Users\\UserController::addUser'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
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
                .'|/annonce/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/li(?'
                    .'|vres(?'
                        .'|/ge(?'
                            .'|nres/([^/]++)/show(*:256)'
                            .'|t/([^/]++)(*:274)'
                        .')'
                        .'|(?:/([^/]++))?(*:297)'
                        .'|/([^/]++)/remove/favoris(*:329)'
                    .')'
                    .'|en/([^/]++)(?'
                        .'|(*:352)'
                        .'|/edit(*:365)'
                        .'|(*:373)'
                    .')'
                .')'
                .'|/categorie/([^/]++)(?'
                    .'|(*:405)'
                    .'|/edit(*:418)'
                    .'|(*:426)'
                .')'
                .'|/database/([^/]++)/file(*:458)'
                .'|/e(?'
                    .'|nt(?'
                        .'|ite/([^/]++)(?'
                            .'|(*:491)'
                            .'|/edit(*:504)'
                            .'|(*:512)'
                        .')'
                        .'|reprise/([^/]++)(?'
                            .'|(*:540)'
                            .'|/edit(*:553)'
                            .'|(*:561)'
                        .')'
                    .')'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:607)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:650)'
                .')'
                .'|/f(?'
                    .'|onction/([^/]++)(?'
                        .'|(*:683)'
                        .'|/edit(*:696)'
                        .'|(*:704)'
                    .')'
                    .'|avoris/(?'
                        .'|add(?:/([^/]++))?(*:740)'
                        .'|remove(?:/([^/]++))?(*:768)'
                    .')'
                .')'
                .'|/genre/([^/]++)(?'
                    .'|(*:796)'
                    .'|/edit(*:809)'
                    .'|(*:817)'
                .')'
                .'|/rubrique/([^/]++)(?'
                    .'|(*:847)'
                    .'|/edit(*:860)'
                    .'|(*:868)'
                .')'
                .'|/t(?'
                    .'|ag/([^/]++)(?'
                        .'|(*:896)'
                        .'|/edit(*:909)'
                        .'|(*:917)'
                    .')'
                    .'|rancheAge/([^/]++)(?'
                        .'|(*:947)'
                        .'|/edit(*:960)'
                        .'|(*:968)'
                    .')'
                    .'|ypeEntite/([^/]++)(?'
                        .'|(*:998)'
                        .'|/edit(*:1011)'
                        .'|(*:1020)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:1048)'
                    .'|/edit(*:1062)'
                    .'|(*:1071)'
                .')'
                .'|/profil/edit/avatar(?:/([^/]++))?(*:1114)'
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
        189 => [[['_route' => 'annonce_show', '_controller' => 'App\\Controller\\AnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'annonce_edit', '_controller' => 'App\\Controller\\AnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'annonce_delete', '_controller' => 'App\\Controller\\AnnonceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        256 => [[['_route' => 'genres_id_livres_show', 'id' => null, '_controller' => 'App\\Controller\\Articles\\LivresController::showAll'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        274 => [[['_route' => 'livres_search_isbn', '_controller' => 'App\\Controller\\Articles\\LivresController::getDataFromIsbn'], ['isbn'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        297 => [[['_route' => 'livre_details', 'id' => 1, '_controller' => 'App\\Controller\\Articles\\LivresController::livreDetails'], ['id'], null, null, false, true, null]],
        329 => [[['_route' => 'remove_article_favoris', 'id' => 1, '_controller' => 'App\\Controller\\Users\\ProfilController::removeFavoris'], ['id'], null, null, false, false, null]],
        352 => [[['_route' => 'lien_show', '_controller' => 'App\\Controller\\LienController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        365 => [[['_route' => 'lien_edit', '_controller' => 'App\\Controller\\LienController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        373 => [[['_route' => 'lien_delete', '_controller' => 'App\\Controller\\LienController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        405 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        418 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        426 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        458 => [[['_route' => 'data_base_file', 'table' => null, '_controller' => 'App\\Controller\\DataBaseController::backupDataBase'], ['table'], null, null, false, false, null]],
        491 => [[['_route' => 'entite_show', '_controller' => 'App\\Controller\\EntiteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        504 => [[['_route' => 'entite_edit', '_controller' => 'App\\Controller\\EntiteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        512 => [[['_route' => 'entite_delete', '_controller' => 'App\\Controller\\EntiteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        540 => [[['_route' => 'entreprise_show', '_controller' => 'App\\Controller\\EntrepriseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        553 => [[['_route' => 'entreprise_edit', '_controller' => 'App\\Controller\\EntrepriseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        561 => [[['_route' => 'entreprise_delete', '_controller' => 'App\\Controller\\EntrepriseController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        607 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        650 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        683 => [[['_route' => 'fonction_show', '_controller' => 'App\\Controller\\FonctionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        696 => [[['_route' => 'fonction_edit', '_controller' => 'App\\Controller\\FonctionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        704 => [[['_route' => 'fonction_delete', '_controller' => 'App\\Controller\\FonctionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        740 => [[['_route' => 'add_article_favoris', 'id' => 1, '_controller' => 'App\\Controller\\Users\\ProfilController::addFavoris'], ['id'], null, null, false, true, null]],
        768 => [[['_route' => 'remove_favoris', 'id' => 1, '_controller' => 'App\\Controller\\Users\\ProfilController::removeFavoris2'], ['id'], null, null, false, true, null]],
        796 => [[['_route' => 'genre_show', '_controller' => 'App\\Controller\\GenreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        809 => [[['_route' => 'genre_edit', '_controller' => 'App\\Controller\\GenreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        817 => [[['_route' => 'genre_delete', '_controller' => 'App\\Controller\\GenreController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        847 => [[['_route' => 'rubrique_show', '_controller' => 'App\\Controller\\RubriqueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        860 => [[['_route' => 'rubrique_edit', '_controller' => 'App\\Controller\\RubriqueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        868 => [[['_route' => 'rubrique_delete', '_controller' => 'App\\Controller\\RubriqueController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        896 => [[['_route' => 'tag_show', '_controller' => 'App\\Controller\\TagController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        909 => [[['_route' => 'tag_edit', '_controller' => 'App\\Controller\\TagController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        917 => [[['_route' => 'tag_delete', '_controller' => 'App\\Controller\\TagController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        947 => [[['_route' => 'tranche_age_show', '_controller' => 'App\\Controller\\TrancheAgeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        960 => [[['_route' => 'tranche_age_edit', '_controller' => 'App\\Controller\\TrancheAgeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        968 => [[['_route' => 'tranche_age_delete', '_controller' => 'App\\Controller\\TrancheAgeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        998 => [[['_route' => 'type_entite_show', '_controller' => 'App\\Controller\\TypeEntiteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1011 => [[['_route' => 'type_entite_edit', '_controller' => 'App\\Controller\\TypeEntiteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1020 => [[['_route' => 'type_entite_delete', '_controller' => 'App\\Controller\\TypeEntiteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1048 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1062 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1071 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1114 => [
            [['_route' => 'edit_color_avatar_profil', 'color' => null, '_controller' => 'App\\Controller\\Users\\ProfilController::editAvatarColorProfil'], ['color'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
