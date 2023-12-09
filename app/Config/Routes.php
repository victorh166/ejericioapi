<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home/api1', 'Home::api1');
$routes->get('home/api2', 'Home::api2');
$routes->get('home/api3', 'Home::api3');
$routes->get('home/api4', 'Home::api4');
