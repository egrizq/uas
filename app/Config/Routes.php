<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');

$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::action');

$routes->get('/register', 'Register::index');
$routes->post('/register', 'Register::action');

$routes->get('/logout', 'Login::logout');

$routes->get('/edit', 'Edit::index');
$routes->post('/edit', 'Edit::action');

$routes->get('/tampilkan_data', 'TampilkanData::index');
$routes->post('/delete', 'TampilkanData::delete');
$routes->get('/search', 'TampilkanData::search');

$routes->post('/excel', "TampilkanData::excel");