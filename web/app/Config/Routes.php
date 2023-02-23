<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// $routes->get('/', 'Home::index');
$routes->get('/dashboard', 'c_dashboard::index', ['filter' => 'AuthTeacher']);

$routes->get('/data-kelas', 'c_dataKelas::index', ['filter' => 'AuthAdmin']);
$routes->get('/data-kelas/form', 'c_dataKelas::form', ['filter' => 'AuthAdmin']);
$routes->post('/data-kelas/form', 'c_dataKelas::create', ['filter' => 'AuthAdmin']);
$routes->get('/data-kelas/form-edit/(:num)', 'c_dataKelas::form_edit/$1', ['filter' => 'AuthAdmin']);
$routes->post('/data-kelas/form-edit/(:num)', 'c_dataKelas::form_edit_process/$1', ['filter' => 'AuthAdmin']);
$routes->get('/data-kelas/form-detail/(:num)', 'c_dataKelas::form_detail/$1', ['filter' => 'AuthAdmin']);
$routes->get('/data-kelas/delete/(:num)', 'c_dataKelas::delete/$1', ['filter' => 'AuthAdmin']);

$routes->get('/data-guru', 'c_dataGuru::index', ['filter' => 'AuthAdmin']);
$routes->get('/data-guru/form', 'c_dataGuru::form', ['filter' => 'AuthAdmin']);
$routes->post('/data-guru/form', 'c_dataGuru::create', ['filter' => 'AuthAdmin']);
$routes->get('/data-guru/form-detail/(:num)', 'c_dataGuru::form_detail/$1', ['filter' => 'AuthAdmin']);
$routes->get('/data-guru/form-edit/(:num)', 'c_dataGuru::form_edit/$1', ['filter' => 'AuthAdmin']);
$routes->post('/data-guru/form-edit/(:num)', 'c_dataGuru::form_edit_process/$1', ['filter' => 'AuthAdmin']);
$routes->get('/data-guru/delete/(:num)', 'c_dataGuru::delete/$1', ['filter' => 'AuthAdmin']);

$routes->get('/data-siswa', 'c_dataSiswa::index', ['filter' => 'AuthAdmin']);
$routes->get('/data-siswa/form', 'c_dataSiswa::form', ['filter' => 'AuthAdmin']);
$routes->post('/data-siswa/form', 'c_dataSiswa::create', ['filter' => 'AuthAdmin']);
$routes->get('/data-siswa/form-detail', 'c_dataSiswa::form_detail', ['filter' => 'AuthAdmin'], ['filter' => 'AuthAdmin']);
$routes->get('/data-siswa/form-edit/(:num)', 'c_dataSiswa::form_edit/$1', ['filter' => 'AuthAdmin']);
$routes->post('/data-siswa/form-edit/(:num)', 'c_dataSiswa::form_edit_process/$1', ['filter' => 'AuthAdmin']);
$routes->get('/data-siswa/delete/(:num)', 'c_dataSiswa::delete/$1', ['filter' => 'AuthAdmin']);

$routes->get('/data-mapel', 'c_dataMapel::index', ['filter' => 'AuthAdmin']);
$routes->get('/data-mapel/form', 'c_dataMapel::form', ['filter' => 'AuthAdmin']);
$routes->post('/data-mapel/form', 'c_dataMapel::create', ['filter' => 'AuthAdmin']);
$routes->get('/data-mapel/form-detail', 'c_dataMapel::form_detail', ['filter' => 'AuthAdmin']);
$routes->get('/data-mapel/form-edit/(:num)', 'c_dataMapel::form_edit/$1', ['filter' => 'AuthAdmin']);
$routes->post('/data-mapel/form-edit/(:num)', 'c_dataMapel::form_edit_process/$1', ['filter' => 'AuthAdmin']);
$routes->get('/data-mapel/delete/(:num)', 'c_dataMapel::delete/$1', ['filter' => 'AuthAdmin']);


// $routes->get('/data-ekskul', 'c_dataEkskul::index');
// $routes->get('/data-ekskul/form', 'c_dataEkskul::form');
// $routes->post('/data-ekskul/form', 'c_dataEkskul::create');
// $routes->get('/data-ekskul/form-edit/(:num)', 'c_dataEkskul::form_edit/$1');
// $routes->post('/data-ekskul/form-edit/(:num)', 'c_dataEkskul::form_edit_process/$1');
// $routes->get('/data-ekskul/delete/(:num)', 'c_dataEkskul::delete/$1');

// $routes->get('/data-cp', 'c_dataCP::index');
// $routes->get('/data-cp/form', 'c_dataCP::form');
// $routes->post('/data-cp/form', 'c_dataCP::create');
// $routes->get('/data-cp/form-edit/(:num)', 'c_dataCP::form_edit/$1');
// $routes->post('/data-cp/form-edit/(:num)', 'c_dataCP::form_edit_process/$1');
// $routes->get('/data-cp/delete/(:num)', 'c_dataCP::delete/$1');

$routes->get('/data-ekskul', 'c_dataEkskul::index', ['filter' => 'AuthAdmin']);
$routes->get('/data-ekskul/form', 'c_dataEkskul::form', ['filter' => 'AuthAdmin']);
$routes->get('/data-ekskul/form-detail', 'c_dataEkskul::form_detail', ['filter' => 'AuthAdmin']);
$routes->get('/data-ekskul/form-edit/(:num)', 'c_dataEkskul::form_edit/$1', ['filter' => 'AuthAdmin']);
$routes->post('/data-ekskul/form-edit/(:num)', 'c_dataEkskul::form_edit_process/$1', ['filter' => 'AuthAdmin']);
$routes->get('/data-ekskul/delete/(:num)', 'c_dataEkskul::delete/$1', ['filter' => 'AuthAdmin']);

$routes->get('/data-cp', 'c_dataCP::index', ['filter' => 'AuthAdmin']);
$routes->get('/data-cp/form', 'c_dataCP::form', ['filter' => 'AuthAdmin']);
$routes->get('/data-cp/form-detail', 'c_dataCP::form_detail', ['filter' => 'AuthAdmin']);


$routes->get('/data-tp', 'c_dataTP::index', ['filter' => 'AuthAdmin']);
$routes->get('/data-tp/form', 'c_dataTP::form', ['filter' => 'AuthAdmin']);
$routes->get('/data-tp/form-detail', 'c_dataTP::form_detail', ['filter' => 'AuthAdmin']);

$routes->get('/set-tahun_ajaran', 'c_setTahunAjaran::index', ['filter' => 'AuthAdmin']);
$routes->get('/set-tahun_ajaran/form', 'c_setTahunAjaran::form', ['filter' => 'AuthAdmin']);
$routes->get('/set-tahun_ajaran/form-detail', 'c_setTahunAjaran::form_detail', ['filter' => 'AuthAdmin']);

$routes->get('/set-semester', 'c_setSemester::index', ['filter' => 'AuthAdmin']);

$routes->get('/set-guru_pelajaran', 'c_setGuruPelajaran::index', ['filter' => 'AuthAdmin']);
$routes->get('/set-guru_pelajaran/form', 'c_setGuruPelajaran::form', ['filter' => 'AuthAdmin']);
$routes->get('/set-guru_pelajaran/form-detail', 'c_setGuruPelajaran::form_detail', ['filter' => 'AuthAdmin']);

$routes->get('/set-guru_ekskul', 'c_setGuruEkskul::index', ['filter' => 'AuthAdmin']);
$routes->get('/set-guru_ekskul/form', 'c_setGuruEkskul::form', ['filter' => 'AuthAdmin']);
$routes->get('/set-guru_ekskul/form-detail', 'c_setGuruEkskul::form_detail', ['filter' => 'AuthAdmin']);

$routes->get('/set-siswa_kelas', 'c_setSiswaKelas::index', ['filter' => 'AuthAdmin']);
$routes->get('/set-siswa_kelas/form', 'c_setSiswaKelas::form', ['filter' => 'AuthAdmin']);

$routes->get('/set-siswa_ekskul', 'c_setSiswaEkskul::index', ['filter' => 'AuthAdmin']);

$routes->get('/set-pelajaran_kelas', 'c_setPelajaranKelas::index', ['filter' => 'AuthAdmin']);
$routes->get('/set-pelajaran-kelas/form', 'c_setPelajaranKelas::form', ['filter' => 'AuthAdmin']);

$routes->get('/rapor-semester', 'c_raporSemester::index', ['filter' => 'AuthTeacher']);
$routes->get('/rapor-semester/form', 'c_raporSemester::form', ['filter' => 'AuthTeacher']);

$routes->get('/catatan-semester', 'c_catatanSemester::index', ['filter' => 'AuthTeacher']);

$routes->get('/status-kenaikan', 'c_statusKenaikan::index', ['filter' => 'AuthAdmin']);

$routes->get('/identitas-siswa', 'c_identitasSiswa::index', ['filter' => 'AuthAdmin']);

$routes->get('/input-nilai-mapel', 'c_inputNilaiMapel::index', ['filter' => 'AuthTeacher']);
$routes->get('/input-nilai-mapel/form', 'c_inputNilaiMapel::form', ['filter' => 'AuthTeacher']);
$routes->get('/input-nilai-mapel/form-detail', 'c_inputNilaiMapel::form_detail', ['filter' => 'AuthTeacher']);

$routes->get('/input-nilai-ekskul', 'c_inputNilaiEkskul::index', ['filter' => 'AuthTeacher']);
$routes->get('/input-nilai-ekskul/form', 'c_inputNilaiEkskul::form', ['filter' => 'AuthTeacher']);

$routes->get('/rekap-nilai_mapel', 'c_rekapNilaiMapel::index', ['filter' => 'AuthTeacher']);

$routes->get('/rekap-nilai_ekskul', 'c_rekapNilaiEkskul::index', ['filter' => 'AuthTeacher']);

$routes->get('/input-presensi', 'c_inputPresensi::index', ['filter' => 'AuthTeacher']);

// Wali Murid
$routes->get('/profile-sekolah', 'c_waliMurid::profile', ['filter' => 'AuthUser']);
$routes->get('/print-rapor', 'c_waliMurid::print', ['filter' => 'AuthUser']);

$routes->get('/test', 'c_dashboard::test', ['filter' => 'AuthUser']);

$routes->get('/', 'c_login::index', ['filter' => 'Login']);
$routes->post('/validasi-login', 'c_login::validasi_login', ['filter' => 'Login']);

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
