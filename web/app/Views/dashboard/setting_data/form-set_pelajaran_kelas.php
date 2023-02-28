<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Set Pelajaran Kelas</h1>
            <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/set-pelajaran_kelas" style="background-color: #845EF7; border-radius: 16px">
                    <span class="d-flex">
                        <i class="ri-logout-box-line  mt-auto mb-auto mr-1"></i>
                        Kembali
                    </span>
            </a>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Form Set Pelajaran Kelas</h4>
    </div>
    <div class="mx-3">
                <div class="container">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4 mb-4 mt-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Kelas</h6>
                            </div>
                            <div class="col-md-8 mb-4 mt-4">
                                <div>
                                    <select class="custom-select my-1 mr-sm-2" id="kelas">
                                        <?php foreach ($option_kelas->data_kelas as $dat) { ?>
                                        <option value="<?= $dat->id ?>" <?= $page == 'edit' ?($dat->id == $data->pelajaran_kelas_detail->id_class ?'selected' :'') :'' ?>>
                                            <?= $dat->class_name ?>
                                        </option>
                                        <?php 
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Semester</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <div>
                                    <select class="custom-select my-1 mr-sm-2" id="semester">
                                        <?php foreach ($option_semester->data_semester as $dat) { ?>
                                        <option value="<?= $dat->id ?>" <?= $page == 'edit' ?($dat->id == $data->pelajaran_kelas_detail->id_semester ?'selected' :'') :'' ?>>
                                            <?= $dat->semester ?>
                                        </option>
                                        <?php 
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Mata Pelajaran</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <select multiple class="form-control" id="mapel" name="mapel[]" size="10">
                                    <?php foreach ($data_mapel->data_mapel as $dat) { ?>
                                    <option value="<?= $dat->id ?>" <?= $page == 'edit' ?($dat->id == $data->pelajaran_kelas_detail->id_subject ?'selected' :'') :'' ?>>
                                        <?= $dat->subject_name ?>
                                    </option>
                                    <?php
                                    } ?>
                                </select>
                            </div>
                            <div class="d-flex justify-content-end mb-3 ml-auto pt-5">
                                <button class="btn text-light mx-1" style="min-width: 6rem; background-color: #845EF7; border-radius: 8px" type="submit">Simpan</button>
                            </div>
                        </div>

</div>

</div>

<script src="<?= base_url(); ?>/js/form-set_pelajaran_kelas.js"></script>
<?= $this->endsection(); ?>                    