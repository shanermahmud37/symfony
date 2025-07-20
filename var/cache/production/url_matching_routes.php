<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/to/do' => [[['_route' => 'app_to_do_index', '_controller' => 'App\\Controller\\ToDoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/to/do/new' => [[['_route' => 'app_to_do_new', '_controller' => 'App\\Controller\\ToDoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/to/do/([^/]++)(?'
                    .'|(*:25)'
                    .'|/edit(*:37)'
                    .'|(*:44)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'app_to_do_show', '_controller' => 'App\\Controller\\ToDoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        37 => [[['_route' => 'app_to_do_edit', '_controller' => 'App\\Controller\\ToDoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        44 => [
            [['_route' => 'app_to_do_delete', '_controller' => 'App\\Controller\\ToDoController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
