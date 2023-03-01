<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title><?= $title; ?></title>
    <link rel="icon" href="<?= base_url(); ?>/assets/logo-polowijen.png" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="package/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Icon hehe -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/package/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/css/rapodig.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">

    <script src="<?= base_url(); ?>/package/jquery/jquery.min.js"></script>
  </head>
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-indigo sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>/dashboard">
          <div class="sidebar-brand-icon">
            <img src="<?= base_url(); ?>/assets/logo-polowijen.png" alt="Logo SDN Polowijen 1 Malang" srcset="" height="45rem">
          </div>
          <div class="sidebar-brand-text mt-2 mx-2"><p class="small font-weight-bold">SDN POLOWIJEN 1<br> MALANG</p></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?= (session()->get('is_admin') || session()->get('is_teacher')) ?'' : 'd-none' ?>">
            <a class="nav-link d-md-flex" href="<?= base_url(); ?>/dashboard">
                <i class="ri-dashboard-fill" style="font-size: 24px"></i>
                <span class="my-auto ml-2">Dashboard</span>
            </a>
        </li>
        <li class="nav-item <?= (session()->get('is_admin')||session()->get('is_teacher'))?'d-none': '' ?>">
            <a class="nav-link d-md-flex" href="<?= base_url(); ?>/profile-sekolah">
                <i class="ri-profile-line" style="font-size: 24px"></i>
                <span class="my-auto ml-2">Profile Sekolah</span>
            </a>
        </li>
        <li class="nav-item <?= (session()->get('is_admin')||session()->get('is_teacher'))?'d-none': '' ?>">
            <a class="nav-link d-md-flex" href="<?= base_url(); ?>/print-rapor">
                <i class="ri-printer-line" style="font-size: 24px"></i>
                <span class="my-auto ml-2">Hasil Rapor</span>
            </a>
        </li>

        <!-- Divider -->
        <!-- <hr class="sidebar-divider" /> -->

        <!-- Heading -->
        <!-- <div class="sidebar-heading">Interface</div> -->

        <!-- Nav Item - Data Umum Collapse Menu  -->
        <li class="nav-item <?= session()->get('is_admin')?'': 'd-none' ?>">
          <a class="nav-link collapsed d-md-flex" href="#" data-toggle="collapse" data-target="#collapseDataUmum" aria-expanded="true" aria-controls="collapseDataUmum">
            <i class="ri-book-2-fill" style="font-size: 24px"></i>
                <span class="my-auto ml-2 mr-auto">Data Umum</span>
          </a>
          <div id="collapseDataUmum" class="collapse" aria-labelledby="headingDataUmum" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="<?= base_url(); ?>/data-kelas">Data Kelas</a>
              <a class="collapse-item" href="<?= base_url(); ?>/data-guru">Data Guru</a>
              <a class="collapse-item" href="<?= base_url(); ?>/data-siswa">Data Siswa</a>
              <a class="collapse-item" href="<?= base_url(); ?>/data-mapel">Data Mapel</a>
              <a class="collapse-item" href="<?= base_url(); ?>/data-ekskul">Ekskul</a>
              <a class="collapse-item" href="<?= base_url(); ?>/data-cp">Capaian Pembelajaran</a>
              <a class="collapse-item" href="<?= base_url(); ?>/data-tp">Tujuan Pembelajaran</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Setting Data Collapse Menu -->
        <li class="nav-item <?= session()->get('is_admin') ?'' : 'd-none' ?>">
          <a class="nav-link collapsed d-md-flex" href="#" data-toggle="collapse" data-target="#collapseSettingData" aria-expanded="true" aria-controls="collapseSettingData">
            <i class="ri-settings-2-line" style="font-size: 24px"></i>
            <span class="my-auto ml-2 mr-auto">Setting Data</span>
          </a>
          <div id="collapseSettingData" class="collapse" aria-labelledby="headingSettingData" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Setting Tahun Ajaran</h6>
              <a class="collapse-item" href="<?= base_url(); ?>/set-tahun_ajaran">Set Tahun Ajaran</a>
              <a class="collapse-item" href="<?= base_url(); ?>/set-semester">Set Semester</a>
              <a class="collapse-item" href="<?= base_url(); ?>/set-guru_pelajaran">Set Guru Pelajaran</a>
              <h6 class="collapse-header">Setting Siswa dan Guru</h6>
              <a class="collapse-item" href="<?= base_url(); ?>/set-siswa_kelas">Set Siswa Kelas</a>
              <a class="collapse-item" href="<?= base_url(); ?>/set-siswa_ekskul">Set Siswa Ekskul</a>
              <a class="collapse-item" href="<?= base_url(); ?>/set-guru_ekskul">Set Guru Ekskul</a>
              <h6 class="collapse-header">Setting Pelajaran</h6>
              <a class="collapse-item" href="<?= base_url(); ?>/set-pelajaran_kelas">Set Pelajaran Kelas</a>
            </div>
          </div>
        </li>

        <!-- Divider -->
        <!-- <hr class="sidebar-divider" /> -->

        <!-- Heading -->
        <!-- <div class="sidebar-heading">Addons</div> -->

        <!-- Nav Item - Penilaian Collapse Menu -->
        <li class="nav-item <?= session()->get('is_teacher') ?'' :'d-none' ?>">
          <a class="nav-link collapsed d-md-flex" href="#" data-toggle="collapse" data-target="#collapsePenilaian" aria-expanded="true" aria-controls="collapsePenilaian">
            <i class="ri-draft-fill" style="font-size: 24px"></i>
            <span class="my-auto ml-2 mr-auto">Penilaian</span>
          </a>
          <div id="collapsePenilaian" class="collapse" aria-labelledby="headingPenilaian" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Input Data</h6>
              <a class="collapse-item" href="<?= base_url(); ?>/input-nilai-mapel">Input Nilai Mapel</a>
              <a class="collapse-item" href="<?= base_url(); ?>/input-nilai-ekskul">Input Nilai Ekskul</a>
              <div class="collapse-divider"></div>
              <h6 class="collapse-header">Rekap Nilai</h6>
              <a class="collapse-item" href="<?= base_url(); ?>/rekap-nilai_mapel">Rekap Nilai Mapel</a>
              <a class="collapse-item" href="<?= base_url(); ?>/rekap-nilai_ekskul">Rekap Nilai Ekskul</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Presensi Collapse Menu -->
        <li class="nav-item <?= session()->get('is_teacher') ?'' :'d-none' ?>">
            <a class="nav-link d-md-flex" href="<?= base_url(); ?>/input-presensi">
                <i class="ri-calendar-check-line" style="font-size: 24px"></i>
                <span class="my-auto ml-2">Presensi</span>
            </a>
        </li>

        <!-- Nav Item - Rapor Collapse Menu -->
        <li class="nav-item <?= session()->get('is_admin') ?'' :'d-none' ?>">
          <a class="nav-link collapsed d-md-flex" href="#" data-toggle="collapse" data-target="#collapseRapor" aria-expanded="true" aria-controls="collapseRapor">
            <i class="ri-book-read-fill" style="font-size: 24px"></i>
            <span class="my-auto ml-2 mr-auto">Rapor</span>
          </a>
          <div id="collapseRapor" class="collapse" aria-labelledby="headingRapor" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="<?= base_url(); ?>/rapor-semester">Rapor Semester</a>
              <a class="collapse-item" href="<?= base_url(); ?>/catatan-semester">Catatan Semester</a>
              <a class="collapse-item" href="<?= base_url(); ?>/status-kenaikan">Status Kenaikan</a>
              <!-- <a class="collapse-item" href="<?= base_url(); ?>/identitas-siswa">Identitas Siswa</a>
              <a class="collapse-item" href="cards.html">Pindah Sekolah</a> -->
            </div>
          </div>
        </li>

        <!-- Nav Item - Logout -->
        <li class="nav-item">
          <a class="nav-link d-md-flex" href="<?= base_url(); ?>/logout">
            <i class="ri-logout-box-line" style="font-size: 24px"></i>
            <span class="my-auto ml-2 mr-auto">Logout</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <ul class="navbar-nav ml-auto">              
              <!-- Nav Item - User Information -->
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><h5 class="mt-3">Welcome, User</h5></span>
                  <i class="ri-user-6-line ri-2x"></i>
                </a>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

      <?= $this->renderSection('conten'); ?>
      
      </div>
    </div>
    <footer class="main-footer">
      <strong>Copyright &copy;Rapodig</strong>
    </footer>
      
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/package/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/package/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/rapodig.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>/package/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url(); ?>/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url(); ?>/js/demo/chart-pie-demo.js"></script>
    <script src="<?= base_url(); ?>/js/demo/chart-bar-demo.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>/package/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/package/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url(); ?>/js/demo/datatables-demo.js"></script>

    <!-- Custom href link -->
    <script src="<?= base_url(); ?>/js/data-href.js"></script>

  </body>
</html>