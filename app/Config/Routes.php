<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
// A route connects a browser URL to the controller method that should handle it.
$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/customers', 'Customers::index');
$routes->get('/users', 'Users::index');
