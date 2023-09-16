<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/activity', 'UserController::homepage');
$routes->get('/activity/(:any)', 'UserController::activity/$1');

