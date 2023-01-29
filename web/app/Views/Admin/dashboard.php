
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
            
            
            <!-- Pie Chart -->
            <div class="col">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Siswa Berdasarkan Jenis Kelamin</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Putra
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Putri
                                        </span>
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

   