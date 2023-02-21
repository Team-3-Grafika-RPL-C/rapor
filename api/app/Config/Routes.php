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
$routes->get('/kelas-walkel', 'CKelas::option_walikelas');

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

// --- Data Ekskul --- //
$routes->get('/ekskul', 'CEkskul::index');
$routes->get('/ekskul/(:num)', 'CEkskul::show/$1');
$routes->post('/ekskul', 'CEkskul::create');
$routes->put('/ekskul/(:num)', 'CEkskul::update/$1');
$routes->delete('/ekskul/(:num)', 'CEkskul::delete/$1');

// --- Data Mapel --- //
$routes->get('/mapel', 'CMapel::index');
$routes->get('/mapel/(:num)', 'CMapel::show/$1');
$routes->post('/mapel', 'CMapel::create');
$routes->put('/mapel/(:num)', 'CMapel::update/$1');
$routes->delete('/mapel/(:num)', 'CMapel::delete/$1');

// --- Data cpembelajaran --- //
$routes->get('/cpembelajaran', 'CCPembelajaran::index');
$routes->get('/cpembelajaran/(:num)', 'CCPembelajaran::show/$1');
$routes->post('/cpembelajaran', 'CCPembelajaran::create');
$routes->put('/cpembelajaran/(:num)', 'CCPembelajaran::update/$1');
$routes->delete('/cpembelajaran/(:num)', 'CCPembelajaran::delete/$1');

// --- Data tpembelajaran --- //
$routes->get('/tpembelajaran', 'CTPembelajaran::index');
$routes->get('/tpembelajaran/(:num)', 'CTPembelajaran::show/$1');
$routes->post('/tpembelajaran', 'CTPembelajaran::create');
$routes->put('/tpembelajaran/(:num)', 'CTPembelajaran::update/$1');
$routes->delete('/tpembelajaran/(:num)', 'CTPembelajaran::delete/$1');

// --- Data Tahun Ajaran --- //
$routes->get('/tahun-ajaran', 'CTahunAjaran::index');
$routes->post('/tahun-ajaran', 'CTahunAjaran::create');
$routes->put('/tahun-ajaran/(:num)', 'CTahunAjaran::update/$1');
$routes->delete('/tahun-ajaran/(:num)', 'CTahunAjaran::delete/$1');
$routes->post('/tahun-ajaran-active/(:num)', 'CTahunAjaran::activation/$1');
$routes->post('/tahun-ajaran-nonactive/(:num)', 'CTahunAjaran::non_activation/$1');

// --- Data Semester --- //
$routes->get('/semester', 'CSemester::index');
$routes->post('/semester-active/(:num)', 'CSemester::activation/$1');
$routes->post('/semester-nonactive/(:num)', 'CSemester::non_activation/$1');
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
