<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Frontend
$routes->get('/', 'Frontend\Home::index');
$routes->get('/{locale}', 'Frontend\Home::index');

// Backend
$routes->get('/{locale}/admin', 'Backend\Dashboard::index');
