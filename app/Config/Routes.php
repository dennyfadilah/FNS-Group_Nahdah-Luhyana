<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::loginHandler');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/', 'DashboardController::index');

// Projects
$routes->get('/projects', 'ProjectController::index');
$routes->post('/projects/create', 'ProjectController::create');
$routes->post('/projects/edit/(:num)', 'ProjectController::edit/$1');
$routes->post('/projects/delete/(:num)', 'ProjectController::delete/$1');

$routes->get('/tasks', 'TaskController::index');
$routes->get('/reports', 'ReportController::index');

// Users
$routes->get('/users', 'UserController::index');
$routes->post('/users/create', 'UserController::create');
$routes->post('/users/edit/(:num)', 'UserController::edit/$1');
$routes->post('/users/delete/(:num)', 'UserController::delete/$1');
