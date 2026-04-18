<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/mon-compte' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/mon-compte/api/toggle' => [[['_route' => 'app_account_toggle_api', '_controller' => 'App\\Controller\\AccountController::toggleApi'], null, null, null, false, false, null]],
        '/mon-compte/supprimer' => [[['_route' => 'app_account_delete', '_controller' => 'App\\Controller\\AccountController::deleteAccount'], null, null, null, false, false, null]],
        '/api/products' => [[['_route' => 'api_products', '_controller' => 'App\\Controller\\ApiController::products'], null, ['GET' => 0], null, false, false, null]],
        '/panier' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/panier/vider' => [[['_route' => 'app_cart_clear', '_controller' => 'App\\Controller\\CartController::clear'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'app_security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/p(?'
                    .'|anier/ajouter/([^/]++)(*:34)'
                    .'|roduit/([^/]++)(*:56)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], ['POST' => 0], null, false, true, null]],
        56 => [
            [['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
