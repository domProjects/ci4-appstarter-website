<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public
$routes->get('/', 'Public\Home::index');
$routes->get('/{locale}', 'Public\Home::index');

// Administration
$routes->get('/{locale}/admin', 'Admin\Dashboard::index');
