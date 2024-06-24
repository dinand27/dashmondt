<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::home');
$routes->get('/login', 'Login::index');
$routes->get('/equipment', 'Equipment::index');
$routes->get('/create_data', 'Equipment::create_data');
$routes->get('/project', 'Home::project');


// post
$routes->post('/create_data', 'Equipment::storing');