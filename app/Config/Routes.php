<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'DashboardController::index');
$routes->get('/projects', 'ProjectController::index');
$routes->get('/tasks', 'TaskController::index');
$routes->get('/reports', 'ReportController::index');
$routes->get('/users', 'UserController::index');
