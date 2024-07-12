<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->get('/login', 'auth\LoginController::index');
$routes->post('/login', 'auth\LoginController::login');
$routes->get('/logout', 'auth\LoginController::logout');
$routes->get('/signup', 'RegisterController::index');
$routes->post('/signup', 'RegisterController::register');


// dashboard homepage
$routes->get('/', 'Dashboard::index', ['filter' => 'authguard']);

// profile page
$routes->get('/user-profile', 'UserController::index',  ['filter' => 'authguard']);



// $routes->get('/', 'Home::index');
// $routes->get('/about', 'About::index');
