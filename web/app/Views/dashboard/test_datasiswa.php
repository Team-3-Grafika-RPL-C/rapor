<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/package/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- icon -->
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
            <a class="nav-link d-flex" href="<?= base_url(); ?>/dashboard">
                <i class="ri-dashboard-fill" style="font-size: 24px"></i>
                <span class="mt-auto mb-auto ml-2">Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <!-- <hr class="sidebar-divider" /> -->

        <!-- Heading -->
        <!-- <div class="sidebar-heading">Interface</div> -->

        <!-- Nav Item - Data Umum Collapse Menu  -->
        <li class="nav-item">
          <a class="nav-link collapsed d-flex" href="#" data-toggle="collapse" data-target="#collapseDataUmum" aria-expanded="true" aria-controls="collapseDataUmum">
            <i class="ri-book-2-fill" style="font-size: 24px"></i>
                <span class="mt-auto mb-auto ml-2 mr-auto">Data Umum</span>
          </a>
          <div id="collapseDataUmum" class="collapse" aria-labelledby="headingDataUmum" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="<?= base_url(); ?>/data-kelas">Data Kelas</a>
              <a class="collapse-item" href="<?= base_url(); ?>/data-guru">Data Guru</a>
              <a class="collapse-item" href="<?= base_url(); ?>/data-siswa">Data Siswa</a>
              <a class="collapse-item" href="cards.html">Data Mapel</a>
              <a class="collapse-item" href="cards.html">Ekstrakurikuler</a>
              <a class="collapse-item" href="cards.html">Capaian Pembelajaran</a>
              <a class="collapse-item" href="cards.html">Tujuan Pembelajaran</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Setting Data Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed d-flex" href="#" data-toggle="collapse" data-target="#collapseSettingData" aria-expanded="true" aria-controls="collapseSettingData">
            <i class="ri-settings-2-line" style="font-size: 24px"></i>
            <span class="mt-auto mb-auto ml-2 mr-auto">Setting Data</span>
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
          <a class="nav-link collapsed d-flex" href="#" data-toggle="collapse" data-target="#collapsePenilaian" aria-expanded="true" aria-controls="collapsePenilaian">
            <i class="ri-draft-fill" style="font-size: 24px"></i>
            <span class="mt-auto mb-auto ml-2 mr-auto">Penilaian</span>
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
          <a class="nav-link collapsed d-flex" href="#" data-toggle="collapse" data-target="#collapsePresensi" aria-expanded="true" aria-controls="collapsePresensi">
            <i class="ri-calendar-check-line" style="font-size: 24px"></i>
            <span class="mt-auto mb-auto ml-2 mr-auto">Presensi</span>
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
          <a class="nav-link collapsed d-flex" href="#" data-toggle="collapse" data-target="#collapseRapor" aria-expanded="true" aria-controls="collapseRapor">
            <i class="ri-book-read-fill" style="font-size: 24px"></i>
            <span class="mt-auto mb-auto ml-2 mr-auto">Rapor</span>
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
          <a class="nav-link d-flex" href="tables.html">
            <i class="ri-logout-box-line" style="font-size: 24px"></i>
            <span class="mt-auto mb-auto ml-2 mr-auto">Logout</span></a
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
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>

            <!-- Content Row -->
            <div class="row">
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pending Requests Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Content Row -->

            <div class="row">
              <!-- Area Chart -->
              <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                    <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area">
                      <canvas id="myAreaChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pie Chart -->
              <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                    <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                      <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                      <span class="mr-2"> <i class="fas fa-circle text-primary"></i> Direct </span>
                      <span class="mr-2"> <i class="fas fa-circle text-success"></i> Social </span>
                      <span class="mr-2"> <i class="fas fa-circle text-info"></i> Referral </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        </div>
        <!-- End of Main Content -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

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
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>/package/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url(); ?>/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url(); ?>/js/demo/chart-pie-demo.js"></script>
  </body>
</html>
