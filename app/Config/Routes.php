<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Rute halaman utama
$routes->get('/product/insert', 'ProductController::insertProduct'); // Rute untuk menambahkan produk
$routes->get('/product/view', 'ProductController::readProduct'); // Rute untuk melihat produk
