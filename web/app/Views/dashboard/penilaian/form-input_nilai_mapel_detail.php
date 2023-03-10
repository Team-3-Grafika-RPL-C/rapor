<?= $this->extend('templates/admin-template.php'); ?>
<?= $this->section('conten'); ?>

<div class="container-fluid d-block">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Input Nilai Mata Pelajaran</h1>
    </div>
    <div class="card shadow mb-5">
        <!-- Card Header -->
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="h3 mb-0 font-weight-bold text-indigo-500">Detail Nilai Siswa</h3>
                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/input-nilai-mapel" style="background-color: #845EF7; border-radius: 16px">
                    <span class="d-flex">
                        <i class="ri-logout-box-line  mt-auto mb-auto mr-1"></i>
                        <p class="d-none d-sm-block mt-auto mb-auto">Kembali</p>
                    </span>
                </a>
            </div>
            <!-- Form Data Kelas -->
            <div class="mx-3">
                <div class="container">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Nama Siswa</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="nama-siswa" name="Nama Siswa" value="Umar bin Khattab" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h text-gray-900 font-weight-bold">Mata Pelajaran</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="mapel" name="Mapel" value="Pendidikan Agama dan Budi Pekerti" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Capaian Pembelajaran</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <textarea autocomplete="off" class="form-control" id="cp" name="CP" rows="5" readonly>Peserta didik mampu bersikap menjadi pendengar yang penuh perhatian. Peserta didik menunjukkan  minat pada tuturan yang didengar serta mampu memahami pesan lisan dan informasi dari media audio, teks aural (teks yang dibacakan dan/atau didengar), instruksi lisan, dan percakapan yang berkaitan dengan tujuan berkomunikasi.</textarea>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Tujuan Pembelajaran</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <textarea autocomplete="off" class="form-control" id="tp" name="TP" rows="2" readonly>Mengetahui rukun iman dan rukun islam</textarea>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Nilai</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="nilai" name="Nilai" value="95" readonly>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
        </div>
    </div>
    
<?= $this->endsection(); ?>