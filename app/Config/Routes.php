<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


 $routes->get('/', 'Tasks::index');
 $routes->get('/tasks/create', 'Tasks::create');
 $routes->post('/tasks/store', 'Tasks::store');
 $routes->get('/tasks/delete/(:num)', 'Tasks::delete/$1');
 

