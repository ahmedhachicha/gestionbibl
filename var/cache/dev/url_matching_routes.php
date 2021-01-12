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
        '/acceuil' => [[['_route' => 'acceuil', '_controller' => 'App\\Controller\\AcceuilController::index'], null, null, null, false, false, null]],
        '/oldadmin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/oldadmin/auteur' => [[['_route' => 'index', '_controller' => 'App\\Controller\\AuteurController::index'], null, null, null, true, false, null]],
        '/oldadmin/auteur/new' => [[['_route' => 'new_autor', '_controller' => 'App\\Controller\\AuteurController::new'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/oldadmin/categorie' => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/oldadmin/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/oldadmin/editeur' => [[['_route' => 'editeur_index', '_controller' => 'App\\Controller\\EditeurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/oldadmin/editeur/new' => [[['_route' => 'editeur_new', '_controller' => 'App\\Controller\\EditeurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/oldadmin/ livre' => [[['_route' => 'livre_index', '_controller' => 'App\\Controller\\LivreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/oldadmin/ livre/new' => [[['_route' => 'livre_new', '_controller' => 'App\\Controller\\LivreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/library' => [[['_route' => 'profilee', '_controller' => 'App\\Controller\\ProfileController::library'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/utilisateurs/modifier/([^/]++)(*:200)'
                .'|/oldadmin/(?'
                    .'|auteur/(?'
                        .'|show(?:/([^/]++))?(*:249)'
                        .'|edit(?:/([^/]++))?(*:275)'
                        .'|delete(?:/([^/]++))?(*:303)'
                    .')'
                    .'|categorie/([^/]++)(?'
                        .'|(*:333)'
                        .'|/edit(*:346)'
                        .'|(*:354)'
                    .')'
                    .'|editeur/([^/]++)(?'
                        .'|(*:382)'
                        .'|/edit(*:395)'
                        .'|(*:403)'
                    .')'
                    .'| livre/([^/]++)(?'
                        .'|(*:430)'
                        .'|/edit(*:443)'
                        .'|(*:451)'
                    .')'
                .')'
                .'|/cart/(?'
                    .'|add/([^/]++)(*:482)'
                    .'|delete/([^/]++)(*:505)'
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
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'modifier_utilisateur', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, true, null]],
        249 => [[['_route' => 'show_autor', 'id' => -1, '_controller' => 'App\\Controller\\AuteurController::show'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'edit_autor', 'id' => -1, '_controller' => 'App\\Controller\\AuteurController::edit'], ['id'], null, null, false, true, null]],
        303 => [[['_route' => 'delete_autor', 'id' => -1, '_controller' => 'App\\Controller\\AuteurController::delete'], ['id'], null, null, false, true, null]],
        333 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        346 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        354 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        382 => [[['_route' => 'editeur_show', '_controller' => 'App\\Controller\\EditeurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        395 => [[['_route' => 'editeur_edit', '_controller' => 'App\\Controller\\EditeurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        403 => [[['_route' => 'editeur_delete', '_controller' => 'App\\Controller\\EditeurController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        430 => [[['_route' => 'livre_show', '_controller' => 'App\\Controller\\LivreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        443 => [[['_route' => 'livre_edit', '_controller' => 'App\\Controller\\LivreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        451 => [[['_route' => 'livre_delete', '_controller' => 'App\\Controller\\LivreController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        482 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        505 => [
            [['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
