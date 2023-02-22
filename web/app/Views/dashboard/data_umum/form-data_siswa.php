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
                <h3 class="h3 mb-0 font-weight-bold text-indigo-500">Form Data Siswa</h3>
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
                    <form action="<?= $page == 'edit' ? '/data-siswa/form-edit/'.$data->siswa_detail->id :'/data-siswa/form' ?>" method="post">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">NISN</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="nisn" name="nisn"
                                value="<?= $page == 'edit' ? $data->siswa_detail->nisn : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h text-gray-900 font-weight-bold">NIS</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="nis" name="nis"
                                value="<?= $page == 'edit' ? $data->siswa_detail->nis : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Nama</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="nama" name="nama"
                                value="<?= $page == 'edit' ? $data->siswa_detail->student_name : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Jenis Kelamin</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <select name="jenis_kelamin" id="jk" class="custom-select">
                                    <option value="0" <?= $page === "edit" ? ($data->siswa_detail->gender == "0" ? "selected" : "") : "" ?>>Perempuan</option>
                                    <option value="1" <?= $page === "edit" ? ($data->siswa_detail->gender == "1" ? "selected" : "") : "" ?>>Laki-Laki</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Tempat Lahir</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                value="<?= $page == 'edit' ? $data->siswa_detail->birthplace : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Tanggal Lahir</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="date" autocomplete="off" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                value="<?= $page == 'edit' ? $data->siswa_detail->birthdate : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Agama</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="agama" name="agama"
                                value="<?= $page == 'edit' ? $data->siswa_detail->religion : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Alamat</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="alamat" name="alamat"
                                value="<?= $page == 'edit' ? $data->siswa_detail->address : '' ?>">
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Nama Ayah</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="nama_ayah" name="nama_ayah"
                                value="<?= $page == 'edit' ? $data->siswa_detail->father_name : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Pekerjaan Ayah</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah"
                                value="<?= $page == 'edit' ? $data->siswa_detail->father_job : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Nama Ibu</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="nama_ibu" name="nama_ibu"
                                value="<?= $page == 'edit' ? $data->siswa_detail->mother_name : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Pekerjaan Ibu</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu"
                                value="<?= $page == 'edit' ? $data->siswa_detail->mother_job : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Alamat Orang Tua</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="alamat_ortu" name="alamat_ortu"
                                value="<?= $page == 'edit' ? $data->siswa_detail->parent_address : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Nama Wali</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="nama_wali" name="nama_wali"
                                value="<?= $page == 'edit' ? $data->siswa_detail->guardian_name : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Pekerjaan Wali</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali"
                                value="<?= $page == 'edit' ? $data->siswa_detail->guardian_job : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Alamat Wali</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="alamat_wali" name="alamat_wali"
                                value="<?= $page == 'edit' ? $data->siswa_detail->guardian_address : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Tingkat</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="tingkat" name="tingkat"
                                value="<?= $page == 'edit' ? $data->siswa_detail->class : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Status</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                            <select name="status" id="status" class="custom-select">
                                    <option value="1" <?= $page === "edit" ? ($data->siswa_detail->status == "1" ? "selected" : "") : "" ?>>Aktif</option>
                                    <option value="2" <?= $page === "edit" ? ($data->siswa_detail->status == "2" ? "selected" : "") : "" ?>>Alumni</option>
                                    <option value="3" <?= $page === "edit" ? ($data->siswa_detail->status == "3" ? "selected" : "") : "" ?>>Keluar</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-3 mt-5 pt-5">
                            <button class="btn text-light mx-1" style="min-width: 6rem; background-color: #845EF7; border-radius: 8px" type="submit">Simpan</button>
                            <a href="<?= base_url(); ?>/data-siswa" class="btn ms-1 text-gray-900" data-toggle="modal" data-target="#cancel" style="min-width: 6rem; background-color: #ECEEEF; border-radius: 8px">Batal</a>
                        </div>
                    </form>
                </div>
            </div>            
        </div>
    </div>
    <!-- Modal -->
    <!-- <div class="modal fade" id="cancel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>              
    </div> -->
    
<?= $this->endsection(); ?>