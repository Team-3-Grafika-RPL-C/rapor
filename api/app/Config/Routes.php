<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// ----- API ----- //

// --- Account --- //
$routes->post('/login/user', 'Accounts::loginUser');
$routes->post('/login/admin', 'Accounts::loginAdmin');

// --- Admin --- //
$routes->post('/students', 'Admin::addStudent');
$routes->put('/students/(:any)', 'Admin::updateStudent/$1');
$routes->delete('/students/(:any)', 'Admin::deleteStudent/$1');

// --- School --- //
$routes->get('/students', 'Schools::getStudentsList');

// --- Data Kelas --- //
$routes->get('/kelas', 'CKelas::index');
$routes->get('/kelas/(:num)', 'CKelas::show/$1');
$routes->post('/kelas', 'CKelas::create');
$routes->put('/kelas/(:num)', 'CKelas::update/$1');
$routes->delete('/kelas/(:num)', 'CKelas::delete/$1');

// --- Data Guru --- //
$routes->get('/guru', 'CGuru::index');
$routes->get('/guru/(:num)', 'CGuru::show/$1');
$routes->post('/guru', 'CGuru::create');
$routes->put('/guru/(:num)', 'CGuru::update/$1');
$routes->delete('/guru/(:num)', 'CGuru::delete/$1');

// --- Data Siswa --- //
$routes->get('/siswa', 'CSiswa::index');
$routes->get('/siswa/(:num)', 'CSiswa::show/$1');
$routes->post('/siswa', 'CSiswa::create');
$routes->put('/siswa/(:num)', 'CSiswa::update/$1');
$routes->delete('/siswa/(:num)', 'CSiswa::delete/$1');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
