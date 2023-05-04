<?= $this->extend('templates/admin-template.php'); ?>
<?= $this->section('conten'); ?>

<div class="container-fluid d-block">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Data Kelas</h1>
    </div>
    <div class="card shadow mb-5">
        <!-- Card Header -->
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="h3 mb-0 font-weight-bold text-indigo-500">Form Data Kelas</h3>
                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/data-kelas" style="background-color: #845EF7; border-radius: 16px">
                    <span class="d-flex">
                        <i class="ri-logout-box-line mt-auto mb-auto mr-1"></i>
                        <p class="d-none d-sm-block mt-auto mb-auto">Kembali</p>
                    </span>
                </a>
            </div>
            <!-- Form Data Kelas -->
            <div class="mx-3">
                    <form action="<?= $page == 'edit' ? '/data-kelas/form-edit/'.$data->kelas_detail->id :'/data-kelas/form' ?>" method="post">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Nama Kelas</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="nama_kelas" name="nama_kelas"
                                value="<?= $page == 'edit' ? $data->kelas_detail->class_name : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h text-gray-900 font-weight-bold">Tingkat</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="tingkat" name="tingkat"
                                value="<?= $page == 'edit' ? $data->kelas_detail->class : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Wali Kelas</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <select name="wali_kelas" id="wali_kelas" class="custom-select">
                                    <?php foreach ($data_teacher->wali_kelas as $dat) { ?>
                                    <option value="<?= $dat->id ?>" <?= $page == 'edit' ?($dat->id == $data->kelas_detail->id_teachers?'selected':''):'' ?>>
                                        <?= $dat->teacher_name ?>
                                    </option>
                                    <?php
                                    } ?>
                                </select>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Jumlah Siswa</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="number" autocomplete="off" class="form-control" id="jumlah_siswa" name="jumlah_siswa"
                                value="<?= $page == 'edit' ? $data->kelas_detail->student_count : '' ?>">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-3 mt-5 pt-5">
                            <button class="btn text-light mx-1" style="min-width: 6rem; background-color: #845EF7; border-radius: 8px" type="submit">Simpan</button>
                            <a href="<?= base_url(); ?>/data-kelas" class="btn ms-1 text-gray-900" data-toggle="modal" data-target="#cancel" style="min-width: 6rem; background-color: #ECEEEF; border-radius: 8px">Batal</a>
                        </div>
                    </form>
            </div>            
        </div>
    </div>
    
<?= $this->endsection(); ?>