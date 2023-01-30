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