<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Welcome::index');
$routes->post('/welcome/greet', 'Welcome::greet');