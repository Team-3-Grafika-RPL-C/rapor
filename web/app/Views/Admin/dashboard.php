<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Rapodig - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="package/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Icon hehe -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/rapodig.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-indigo sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon">
            <img src="<?= base_url(); ?>/assets/logo-polowijen.png" alt="Logo SDN Polowijen 1 Malang" srcset="" height="45rem">
          </div>
          <div class="sidebar-brand-text mt-2 mx-2"><p class="small font-weight-bold">SDN POLOWIJEN 1<br> MALANG</p></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="ri-dashboard-fill" style="font-size: 14px"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <!-- <hr class="sidebar-divider" /> -->

        <!-- Heading -->
        <!-- <div class="sidebar-heading">Interface</div> -->

        <!-- Nav Item - Data Umum Collapse Menu  -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDataUmum" aria-expanded="true" aria-controls="collapseDataUmum">
            <i class="ri-book-2-fill" style="font-size: 14px"></i>
            <span>Data Umum</span>
          </a>
          <div id="collapseDataUmum" class="collapse" aria-labelledby="headingDataUmum" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="buttons.html">Data Kelas</a>
              <a class="collapse-item" href="cards.html">Data Guru</a>
              <a class="collapse-item" href="cards.html">Data Siswa</a>
              <a class="collapse-item" href="cards.html">Data Mapel</a>
              <a class="collapse-item" href="cards.html">Ekstrakurikuler</a>
              <a class="collapse-item" href="cards.html">Capaian Pembelajaran</a>
              <a class="collapse-item" href="cards.html">Tujuan Pembelajaran</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Setting Data Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettingData" aria-expanded="true" aria-controls="collapseSettingData">
            <i class="ri-settings-2-line" style="font-size: 14px"></i>
            <span>Setting Data</span>
          </a>
          <div id="collapseSettingData" class="collapse" aria-labelledby="headingSettingData" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Setting Tahun Ajaran</h6>
              <a class="collapse-item" href="utilities-color.html">Set Tahun Ajaran</a>
              <a class="collapse-item" href="utilities-border.html">Set Semester</a>
              <a class="collapse-item" href="utilities-animation.html">Set Guru Pelajaran</a>
              <h6 class="collapse-header">Setting Siswa dan Guru</h6>
              <a class="collapse-item" href="utilities-color.html">Set Siswa Kelas</a>
              <a class="collapse-item" href="utilities-border.html">Set Siswa Ekskul</a>
              <a class="collapse-item" href="utilities-animation.html">Set Guru Ekskul</a>
              <h6 class="collapse-header">Setting Pelajaran</h6>
              <a class="collapse-item" href="utilities-color.html">Set Pelajaran Kelas</a>
            </div>
          </div>
        </li>

        <!-- Divider -->
        <!-- <hr class="sidebar-divider" /> -->

        <!-- Heading -->
        <!-- <div class="sidebar-heading">Addons</div> -->

        <!-- Nav Item - Penilaian Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePenilaian" aria-expanded="true" aria-controls="collapsePenilaian">
            <i class="ri-draft-fill"></i>
            <span>Penilaian</span>
          </a>
          <div id="collapsePenilaian" class="collapse" aria-labelledby="headingPenilaian" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Input Data</h6>
              <a class="collapse-item" href="login.html">Input Nilai Mapel</a>
              <a class="collapse-item" href="register.html">Input Nilai Ekskul</a>
              <div class="collapse-divider"></div>
              <h6 class="collapse-header">Rekap Nilai</h6>
              <a class="collapse-item" href="404.html">Rekap Nilai</a>
              <a class="collapse-item" href="blank.html">Rekap Nilai Ekskul</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Presensi Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePresensi" aria-expanded="true" aria-controls="collapsePresensi">
            <i class="ri-calendar-check-line" style="font-size: 14px"></i>
            <span>Presensi</span>
          </a>
          <div id="collapsePresensi" class="collapse" aria-labelledby="headingPresensi" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="buttons.html">Input Presensi</a>
              <a class="collapse-item" href="cards.html">Rekap Presensi</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Rapor Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRapor" aria-expanded="true" aria-controls="collapseRapor">
            <i class="ri-book-read-fill" style="font-size: 14px"></i>
            <span>Rapor</span>
          </a>
          <div id="collapseRapor" class="collapse" aria-labelledby="headingRapor" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="buttons.html">Rapor Semester</a>
              <a class="collapse-item" href="cards.html">Catatan Semester</a>
              <a class="collapse-item" href="cards.html">Status Kenaikan</a>
              <a class="collapse-item" href="cards.html">Identitas Siswa</a>
              <a class="collapse-item" href="cards.html">Pindah Sekolah</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Logout -->
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="ri-logout-box-line"></i>
            <span>Logout</span></a
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
        <div>
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <div class="">
              <img src="<?= base_url(); ?>/assets/rapodig.png" alt="Logo Rapodig" height="45rem">
            </div>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">              
              <!-- Nav Item - User Information -->
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><h5 class="mt-3">Welcome, User</h5></span>
                  <i class="ri-user-6-line ri-2x"></i>
                </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Dashboard</h1>
            </div>

            <div class="row">
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-primary-500 content-radius shadow h-100 py-2">
                  <div class="card-body my-0 py-0">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2 text-light">
                        <p class="text-xs mb-1">Jumlah Siswa</p>
                        <div class="h2 mb-0 font-weight-bold">345</div>
                      </div>
                      <div class="col-auto">
                      <i class="ri-team-fill ri-3x text-light"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-danger-500 content-radius shadow h-100 py-2">
                  <div class="card-body my-0 py-0">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2 text-light">
                        <p class="text-xs mb-1">Jumlah Guru</p>
                        <div class="h2 mb-0 font-weight-bold">60</div>
                      </div>
                      <div class="col-auto">
                        <i class="ri-group-fill ri-3x text-light"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-warning-500 content-radius shadow h-100 py-2">
                  <div class="card-body my-0 py-0">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2 text-light">
                        <div class="text-xs mb-1">Jumlah Kelas</div>                        
                          <div class="h2 mb-0 mr-3 font-weight-bold">12</div>
                      </div>
                      <div class="col-auto">
                        <i class="ri-community-fill ri-3x text-light"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-success-700 content-radius shadow h-100 py-2">
                  <div class="card-body my-0 py-0">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2 text-light">
                        <div class="text-xs mb-1">Jumlah Mapel</div>
                        <div class="h2 mb-0 font-weight-bold">17</div>
                      </div>
                      <div class="col-auto">
                      <i class="ri-book-fill ri-3x text-light"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>          

            
        </div>
        <!-- End of Main Content -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

   <!-- Bootstrap core JavaScript-->
   <script src="<?= base_url(); ?>/package/jquery/jquery.min.js"></script>
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
  </body>
</html>
