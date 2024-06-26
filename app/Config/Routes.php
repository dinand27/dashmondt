<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::home');
$routes->get('/home', 'Home::home');
$routes->get('/login', 'Login::index');
$routes->get('/equipment', 'Equipment::index');
$routes->get('/tampildata', 'Equipment::data_dashboard');
$routes->get('/chart', 'Equipment::jum_data_status');

$routes->get('/project', 'Home::project');

$routes->get('/create_data', 'Equipment::create_data');
// post
$routes->post('/create_data', 'Equipment::storing');

// edit
$routes->get('equipment/edit/(:any)', 'Equipment::formEditData/$1');
$routes->post('equipment/edit/(:any)', 'Equipment::prosesdata');

// Hapus
$routes->get('equipment/delete/(:any)', 'Equipment::hapusdata/$1');

$routes->get('chart/edit/(:any)', 'Equipment::formEditchart/$1');
$routes->post('chart/edit/(:any)', 'Equipment::prosesdatachart');
$routes->get('chart/delete/(:any)', 'Equipment::hapusdatachart/$1');