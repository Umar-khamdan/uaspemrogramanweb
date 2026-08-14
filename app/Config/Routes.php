<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system routing file first
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Controller Namespace
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');

// ✅ Di sinilah letak perbaikan — pengendali utama = Auth
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('index');

$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Rute Aplikasi
 * --------------------------------------------------------------------
 */
$routes->get('auth/login', 'Auth::index');
$routes->post('auth/login', 'Auth::login');
$routes->get('auth/logout', 'Auth::logout');

$routes->get('buku', 'Buku::index');
$routes->get('buku/tambah', 'Buku::tambah');
$routes->post('buku/simpan', 'Buku::simpan');
$routes->get('buku/edit/(:num)', 'Buku::edit/$1');
$routes->post('buku/perbarui/(:num)', 'Buku::perbarui/$1');
$routes->get('buku/hapus/(:num)', 'Buku::hapus/$1');