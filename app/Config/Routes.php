<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public
$routes->get('/', 'Public\Home::index');

// Administration
$routes->get('/admin', 'Admin\Dashboard::index');
