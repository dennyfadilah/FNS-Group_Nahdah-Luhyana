<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::loginHandler');
$routes->get('/register', 'AuthController::register');
$routes->get('/forgot-password', 'AuthController::forgotPassword');
$routes->get('/reset-password', 'AuthController::resetPassword');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/', 'DashboardController::index');
$routes->get('/projects', 'ProjectController::index');
$routes->get('/tasks', 'TaskController::index');
$routes->get('/reports', 'ReportController::index');
$routes->get('/users', 'UserController::index');
