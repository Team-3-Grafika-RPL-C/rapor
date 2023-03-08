<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>

<div class="container-fluid d-block">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Set Pelajaran Kelas</h1>
    </div>
    <div class="card shadow mb-5">
        <!-- Card Header -->
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="h3 mb-0 font-weight-bold text-indigo-500">Detail Pelajaran Kelas</h3>
                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/set-pelajaran_kelas" style="background-color: #845EF7; border-radius: 16px">
                    <span class="d-flex">
                        <i class="ri-logout-box-line  mt-auto mb-auto mr-1"></i>
                        Kembali
                    </span>
                </a>
            </div>

            <div class="mx-3">
                <div class="container">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                    <h6 class="h6 text-gray-900 font-weight-bold">Kelas</h6>
                                </div>
                                <div class="col-md-8 mb-4">
                                    <select class="custom-select my-1 mr-sm-2" id="kelas" name="kelas" disabled>
                                        <option value="<?= $pelajaran_kelas[0]->id_class ?>">
                                            <?= $pelajaran_kelas[0]->class_name ?>
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <h6 class="h6 text-gray-900 font-weight-bold">Semester</h6>
                                </div>
                                <div class="col-md-8 mb-4">
                                    <select class="custom-select my-1 mr-sm-2" id="semester" name="semester" disabled>
                                        <option value="<?= $pelajaran_kelas[0]->id_semester ?>">
                                            <?= $pelajaran_kelas[0]->semester ?>
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <h6 class="h6 text-gray-900 font-weight-bold">Mata Pelajaran</h6>
                                </div>
                                <div class="col-md-8 mb-4">
                                    <select multiple class="form-control" id="mapel_ajaran" size="8" disabled>
                                        <?php foreach ($detail->pelajaran_kelas_detail as $dat) { ?>
                                        <option value="<?= $dat->id_subject ?>">
                                            <?= $dat->subject_name ?>
                                        </option>
                                        <?php
                                        }?>
                                    </select>
                                </div>
                                <div class="d-flex justify-content-end mb-3 ml-auto pt-5">
                                    <button class="btn text-light mx-1" style="min-width: 6rem; background-color: #845EF7; border-radius: 8px" type="submit">Simpan</button>
                                </div>
                            </div>
                        </div>

    </div>

</div>

<script src="<?= base_url(); ?>/js/form-set_pelajaran_kelas.js"></script>
<?= $this->endsection(); ?>                    