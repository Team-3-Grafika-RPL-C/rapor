<?= $this->extend('templates/admin-template.php'); ?>
<?= $this->section('conten'); ?>

<div class="container-fluid d-block">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Data Siswa</h1>
    </div>
    <div class="card shadow mb-5">
        <!-- Card Header -->
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="h3 mb-0 font-weight-bold text-indigo-500">Detail Data Siswa</h3>
                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/data-siswa" style="background-color: #845EF7; border-radius: 16px">
                    <span class="d-flex">
                        <i class="ri-logout-box-line  mt-auto mb-auto mr-1"></i>
                        <p class="d-none d-sm-block mt-auto mb-auto">Kembali</p>
                    </span>
                </a>
            </div>
            <!-- Form Data Kelas -->
            <div class="mx-3">
                <div class="container">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">NISN</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="nisn" name="NISN" 
                                value="<?= $data->siswa_detail->nisn ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h text-gray-900 font-weight-bold">NIS</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="nis" name="NIS"  
                                value="<?= $data->siswa_detail->nis ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Nama</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="nama" name="Nama" 
                                value="<?= $data->siswa_detail->student_name ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Jenis Kelamin</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="jenis_kelamin" name="Jenis Kelamin" 
                                value="<?= $data->siswa_detail->gender == 0 ? ("Perempuan") : ("Laki-Laki")?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Tempat Lahir</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="tempat_lahir" name="Tempat lahir" 
                                value="<?= $data->siswa_detail->birthplace ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Tanggal Lahir</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="tanggal_lahir" name="Tanggal lahir" 
                                value="<?= $data->siswa_detail->birthdate ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Agama</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="alamat" name="Alamat" 
                                value="<?= $data->siswa_detail->religion ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Alamat</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="alamat" name="Alamat" 
                                value="<?= $data->siswa_detail->address ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Nama Ayah</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="nama_ayah" name="Nama Ayah" 
                                value="<?= $data->siswa_detail->father_name ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Pekerjaan Ayah</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="pekerjaan_ayah" name="Pekerjaan Ayah" 
                                value="<?= $data->siswa_detail->father_job ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Nama Ibu</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="nama_ibu" name="Nama Ibu" 
                                value="<?= $data->siswa_detail->mother_name ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Pekerjaan Ibu</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="pekerjaan_ibu" name="Pekerjaan Ibu" 
                                value="<?= $data->siswa_detail->mother_job ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Alamat Orang Tua</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="alamat_orang_tua" name="Alamat Orang Tua" 
                                value="<?= $data->siswa_detail->parent_address ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Nama Wali</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="nama_wali" name="Nama Wali" 
                                value="<?= $data->siswa_detail->guardian_name ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Pekerjaan Wali</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="pekerjaan_wali" name="Pekerjaan Wali" 
                                value="<?= $data->siswa_detail->guardian_job?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Alamat Wali</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="alamat_wali" name="Alamat Wali" 
                                value="<?= $data->siswa_detail->guardian_address ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Tingkat</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="tingkat" name="Tingkat" 
                                value="<?= $data->siswa_detail->class ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Status</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="status" name="Status" 
                                value="<?= $data->siswa_detail->status == 1 ? "Aktif" : ($data->siswa_detail->status == 2 ? "Keluar" : "Alumni")  ?>" readonly>
                            </div>

                        </div>
                </div>
            </div>            
        </div>
    </div>
    
<?= $this->endsection(); ?>