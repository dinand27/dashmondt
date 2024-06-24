<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::home');
$routes->get('/login', 'Login::index');
$routes->get('/equipment', 'Equipment::index');
$routes->get('/getall', 'Equipment::get_all');

$routes->get('/project', 'Home::project');
