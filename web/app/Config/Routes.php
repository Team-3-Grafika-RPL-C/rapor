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
$routes->get('/dashboard', 'c_dashboard::index');

$routes->get('/data-kelas', 'c_dataKelas::index');
$routes->get('/data-kelas/form', 'c_dataKelas::form');
$routes->post('/data-kelas/form', 'c_dataKelas::create');
$routes->get('/data-kelas/form-edit/(:num)', 'c_dataKelas::form_edit/$1');
$routes->post('/data-kelas/form-edit/(:num)', 'c_dataKelas::form_edit_process/$1');
$routes->get('/data-kelas/form-detail/(:num)', 'c_dataKelas::form_detail/$1');
$routes->get('/data-kelas/delete/(:num)', 'c_dataKelas::delete/$1');

$routes->get('/data-guru', 'c_dataGuru::index');
$routes->get('/data-guru/form', 'c_dataGuru::form');
$routes->post('/data-guru/form', 'c_dataGuru::create');
$routes->get('/data-guru/form-detail/(:num)', 'c_dataGuru::form_detail/$1');
$routes->get('/data-guru/form-edit/(:num)', 'c_dataGuru::form_edit/$1');
$routes->post('/data-guru/form-edit/(:num)', 'c_dataGuru::form_edit_process/$1');
$routes->get('/data-guru/delete/(:num)', 'c_dataGuru::delete/$1');

$routes->get('/data-siswa', 'c_dataSiswa::index');
$routes->get('/data-siswa/form', 'c_dataSiswa::form');
$routes->get('/data-siswa/form-detail', 'c_dataSiswa::form_detail');

$routes->get('/data-mapel', 'c_dataMapel::index');
$routes->get('/data-mapel/form', 'c_dataMapel::form');
$routes->get('/data-mapel/form-detail', 'c_dataMapel::form_detail');


$routes->get('/data-ekskul', 'c_dataEkskul::index');
$routes->get('/data-ekskul/form', 'c_dataEkskul::form');
$routes->get('/data-ekskul/form-detail', 'c_dataEkskul::form_detail');

$routes->get('/data-cp', 'c_dataCP::index');
$routes->get('/data-cp/form', 'c_dataCP::form');
$routes->get('/data-cp/form-detail', 'c_dataCP::form_detail');


$routes->get('/data-tp', 'c_dataTP::index');
$routes->get('/data-tp/form', 'c_dataTP::form');
$routes->get('/data-tp/form-detail', 'c_dataTP::form_detail');

$routes->get('/set-tahun_ajaran', 'c_setTahunAjaran::index');
$routes->get('/set-tahun_ajaran/form', 'c_setTahunAjaran::form');
$routes->get('/set-tahun_ajaran/form-detail', 'c_setTahunAjaran::form_detail');

$routes->get('/set-semester', 'c_setSemester::index');

$routes->get('/set-guru_pelajaran', 'c_setGuruPelajaran::index');
$routes->get('/set-guru_pelajaran/form', 'c_setGuruPelajaran::form');
$routes->get('/set-guru_pelajaran/form-detail', 'c_setGuruPelajaran::form_detail');

$routes->get('/set-guru_ekskul', 'c_setGuruEkskul::index');
$routes->get('/set-guru_ekskul/form', 'c_setGuruEkskul::form');
$routes->get('/set-guru_ekskul/form-detail', 'c_setGuruEkskul::form_detail');

$routes->get('/set-siswa_kelas', 'c_setSiswaKelas::index');
$routes->get('/set-siswa_kelas/form', 'c_setSiswaKelas::form');

$routes->get('/set-siswa_ekskul', 'c_setSiswaEkskul::index');

$routes->get('/set-pelajaran_kelas', 'c_setPelajaranKelas::index');
$routes->get('/set-pelajaran-kelas/form', 'c_setPelajaranKelas::form');

$routes->get('/rapor-semester', 'c_raporSemester::index');
$routes->get('/rapor-semester/form', 'c_raporSemester::form');

$routes->get('/catatan-semester', 'c_catatanSemester::index');

$routes->get('/status-kenaikan', 'c_statusKenaikan::index');

$routes->get('/identitas-siswa', 'c_identitasSiswa::index');

$routes->get('/input-nilai-mapel', 'c_inputNilaiMapel::index');
$routes->get('/input-nilai-mapel/form', 'c_inputNilaiMapel::form');
$routes->get('/input-nilai-mapel/form-detail', 'c_inputNilaiMapel::form_detail');

$routes->get('/input-nilai-ekskul', 'c_inputNilaiEkskul::index');
$routes->get('/input-nilai-ekskul/form', 'c_inputNilaiEkskul::form');

$routes->get('/rekap-nilai_mapel', 'c_rekapNilaiMapel::index');

$routes->get('/rekap-nilai_ekskul', 'c_rekapNilaiEkskul::index');

$routes->get('/input-presensi', 'c_inputPresensi::index');

// Wali Murid
$routes->get('/profile-sekolah', 'c_waliMurid::profile');
$routes->get('/print-rapor', 'c_waliMurid::print');

$routes->get('/test', 'c_dashboard::test');

$routes->get('/','c_login::index');
$routes->post('/validasi-login', 'c_login::validasi_login');

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
