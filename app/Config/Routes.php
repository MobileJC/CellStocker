<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Default displaying cell vials info
$routes->get('displayCells', 'DisplayCells::index');