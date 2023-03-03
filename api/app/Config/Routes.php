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
// $routes->post('/login/user', 'Accounts::loginUser');
// $routes->post('/login/admin', 'Accounts::loginAdmin');

// --- Admin --- //
// $routes->post('/students', 'Admin::addStudent');
// $routes->put('/students/(:any)', 'Admin::updateStudent/$1');
// $routes->delete('/students/(:any)', 'Admin::deleteStudent/$1');

// --- School --- //
// $routes->get('/students', 'Schools::getStudentsList');

// --- Account --- //
$routes->post('/login', 'CAccounts::login');
$routes->get('/get-id','CAccounts::getId');

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
$routes->get('/tp-semester', 'CTPembelajaran::option_semester');
$routes->get('/tp-cp', 'CTPembelajaran::option_cp');


// --- Data Tahun Ajaran --- //
$routes->get('/tahun-ajaran', 'CTahunAjaran::index');
$routes->get('/tahun-ajaran/(:num)', 'CTahunAjaran::show/$1');
$routes->post('/tahun-ajaran', 'CTahunAjaran::create');
$routes->put('/tahun-ajaran/(:num)', 'CTahunAjaran::update/$1');
$routes->delete('/tahun-ajaran/(:num)', 'CTahunAjaran::delete/$1');
$routes->post('/tahun-ajaran-active/(:num)', 'CTahunAjaran::activation/$1');
$routes->post('/tahun-ajaran-nonactive/(:num)', 'CTahunAjaran::non_activation/$1');
$routes->get('/option-tahun', 'CTahunAjaran::option_tahun');


// --- Data Semester --- //
$routes->get('/semester', 'CSemester::index');
$routes->post('/semester-active/(:num)', 'CSemester::activation/$1');
$routes->post('/semester-nonactive/(:num)', 'CSemester::non_activation/$1');

// --- Set Guru Pelajaran --- //
$routes->get('/guru-pelajaran', 'CGuruPelajaran::index');
$routes->get('/guru-pelajaran/(:num)', 'CGuruPelajaran::show/$1');
$routes->get('/guru-pelajaran-detail/(:num)', 'CGuruPelajaran::show_detail/$1');
$routes->post('/guru-pelajaran', 'CGuruPelajaran::create');
$routes->post('/guru-pelajaran-detail', 'CGuruPelajaranDetail::create_detail');
$routes->delete('/guru-pelajaran-detail/(:num)', 'CGuruPelajaranDetail::delete_detail/$1');
$routes->put('/guru-pelajaran/(:num)', 'CGuruPelajaran::update/$1');
$routes->delete('/guru-pelajaran/(:num)', 'CGuruPelajaran::delete/$1');
$routes->get('/gp-option-guru', 'CGuruPelajaran::option_guru');
$routes->get('/gp-option-kelas', 'CGuruPelajaran::option_kelas');
$routes->get('/gp-option-tahun', 'CGuruPelajaran::option_tahun');
$routes->get('/gp-data-mapel', 'CGuruPelajaran::data_mapel');


// --- Set Guru Ekskul --- //
$routes->get('/guru-ekskul', 'CGuruEkskul::index');
$routes->get('/guru-ekskul/(:num)', 'CGuruEkskul::show/$1');
$routes->post('/guru-ekskul', 'CGuruEkskul::create');
$routes->put('/guru-ekskul/(:num)', 'CGuruEkskul::update/$1');
$routes->delete('/guru-ekskul/(:num)', 'CGuruEkskul::delete/$1');
$routes->get('/ge-option-guru', 'CGuruEkskul::option_guru');
$routes->get('/ge-option-tahun', 'CGuruEkskul::option_tahun');
$routes->get('/ge-data-ekskul', 'CGuruEkskul::data_ekskul');



// --- Set Pelajaran Kelas--- //
$routes->get('/pelajaran-kelas', 'CPelajaranKelas::index');
$routes->get('/pelajaran-kelas/(:num)', 'CPelajaranKelas::show/$1');
$routes->get('/pelajaran-kelas-detail/(:num)', 'CPelajaranKelas::show_detail/$1');
$routes->post('/pelajaran-kelas', 'CPelajaranKelas::create');
$routes->post('/pelajaran-kelas-detail', 'CPelajaranKelasDetail::create_detail');
$routes->delete('/pelajaran-kelas-detail/(:num)', 'CPelajaranKelasDetail::delete_detail/$1');
$routes->put('/pelajaran-kelas/(:num)', 'CPelajaranKelas::update/$1');
$routes->delete('/pelajaran-kelas/(:num)', 'CPelajaranKelas::delete/$1');
$routes->get('/pk-option-kelas', 'CPelajaranKelas::option_kelas');
$routes->get('/pk-option-semester', 'CPelajaranKelas::option_semester');
$routes->get('/pk-data-mapel', 'CPelajaranKelas::data_mapel');



// --- Set Siswa Kelas--- //
$routes->get('/siswa-option-kelas', 'CSiswaKelas::option_kelas');
$routes->post('/siswa-kelas', 'CSiswaKelas::insert');
$routes->get('/siswa-option-tahun', 'CSiswaKelas::option_tahun');
$routes->post('/data-siswa-kelas', 'CSiswaKelas::data_siswa_kelas');
$routes->get('/siswa-kelas', 'CSiswaKelas::data_siswa');
$routes->delete('/siswa-kelas/(:num)', 'CSiswaKelas::delete/$1');
$routes->post('/save-noabsen/(:num)', 'CSiswaKelas::save_noabsen');

// --- Set Siswa Ekskul--- //
$routes->get('/eks-option-ekskul', 'CSiswaEkskul::option_ekskul');
$routes->post('/siswa-ekskul', 'CSiswaEkskul::insert');
$routes->post('/data-siswa-ekskul', 'CSiswaEkskul::data_siswa_ekskul');
$routes->get('/siswa-ekskul', 'CSiswaEkskul::data_siswa');
$routes->delete('/siswa-ekskul/(:num)', 'CSiswaEkskul::delete/$1');


// --- Presensi--- //
$routes->post('/presensi', 'CPresensi::create');
$routes->put('/presensi/(:num)', 'CPresensi::update/$1');
$routes->get('/presensi-option-kelas', 'CPresensi::option_kelas');

// --- Rapor Semester --- //
$routes->get('/rapor', 'CRaporSemester::index');
$routes->get('/rapor-option-siswa/(:num)', 'CRaporSemester::option_siswa/$1');
$routes->get('/rapor-profil/(:num)', 'CRaporSemester::get_profil/$1');
$routes->get('/rapor-nilai/(:num)', 'CRaporSemester::get_nilai/$1');
$routes->get('/rapor-nilai-ekskul/(:num)', 'CRaporSemester::get_nilai_ekskul/$1');
$routes->get('/rapor-catatan/(:num)', 'CRaporSemester::get_catatan/$1');
$routes->get('/rapor-presensi/(:num)', 'CRaporSemester::get_presensi/$1');

// --- Nilai Mapel --- //
$routes->get('/nm-option-mapel', 'CInputNilaiMapel::option_mapel');
$routes->get('/nm-option-kelas', 'CInputNilaiMapel::option_kelas');
$routes->post('/nilai-mapel', 'CInputNilaiMapel::data_nilai');
$routes->get('/nilai-mapel-detail/(:num)', 'CInputNilaiMapel::show/$1');
$routes->post('/input-nilai-mapel', 'CInputNilaiMapel::create');
$routes->put('/input-nilai-mapel/(:num)', 'CInputNilaiMapel::update/$1');
$routes->delete('/input-nilai-mapel/(:num)', 'CInputNilaiMapel::delete/$1');

// --- Nilai Ekskul --- //
$routes->get('/ne-option-ekskul', 'CInputNilaiEkskul::option_ekskul');
$routes->get('/ne-option-kelas', 'CInputNilaiEkskul::option_kelas');
$routes->post('/nilai-ekskul', 'CInputNilaiEkskul::data_nilai');
$routes->get('/nilai-ekskul-detail/(:num)', 'CInputNilaiEkskul::show/$1');
$routes->post('/input-nilai-ekskul', 'CInputNilaiEkskul::create');
$routes->put('/input-nilai-ekskul/(:num)', 'CInputNilaiEkskul::update/$1');
$routes->delete('/input-nilai-ekskul/(:num)', 'CInputNilaiEkskul::delete/$1');

// --- Catatan Semester --- //
$routes->post('/data-catatan-semester', 'CCatatanSemester::data_siswa');
$routes->get('/cs-option-kelas', 'CCatatanSemester::option_kelas');
$routes->get('/cs-option-tahun', 'CCatatanSemester::option_tahun');
$routes->post('/catatan-semester', 'CCatatanSemester::insert');
$routes->put('/catatan-semester/(:num)', 'CCatatanSemester::update/$1');


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
