<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->get('/', 'Auth::index');
$routes->get('/signup', 'Auth::signup');
$routes->match(['get', 'post'], 'Auth/store', 'Auth::store');
$routes->match(['get', 'post'], 'Auth/loginAuth', 'Auth::loginAuth');
$routes->get('/signin', 'Auth::index');
$routes->get('/Home', 'Home::index',['filter' => 'authGuard']);
$routes->get('/logout', 'Auth::logout');
