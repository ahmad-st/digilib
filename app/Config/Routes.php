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
$routes->get('/logout', 'Auth::logout');

// $routes->get('/Home', 'Home::index',['filter' => 'authGuard']);
//     $routes->get('/Layout', 'Home::layout',['filter' => 'authGuard']);
//     $routes->get('/Sample', 'Home::samplepage',['filter' => 'authGuard']);

$routes->group('', ['filter' => 'authGuard'], static function ($routes) {
    // $routes->resource('users');
    $routes->get('home', 'Home::index');
    $routes->get('layout', 'Home::layout');
    $routes->get('sample', 'Home::samplepage');
    $routes->get('sampletable', 'Home::sampletable');
    $routes->get('samplecrm', 'Home::samplecrm');
});
