<?= $this->extend('templates/admin-template.php'); ?>
<?= $this->section('conten'); ?>

<div class="container-fluid d-block">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Set Guru Pelajaran</h1>
    </div>
    <div class="card shadow mb-5">
        <!-- Card Header -->
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="h3 mb-0 font-weight-bold text-indigo-500">Form Set Guru Pelajaran</h3>
                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/set-guru_pelajaran" style="background-color: #845EF7; border-radius: 16px">
                    <span class="d-flex">
                        <i class="ri-logout-box-line  mt-auto mb-auto mr-1"></i>
                        Kembali
                    </span>
                </a>
            </div>
            <!-- Form Data Kelas -->
            <div class="mx-3">
                <div class="container">
                    <form action="<?= $page == 'edit' ? '/set-guru_pelajaran/form-edit/'.$guru_pelajaran->guru_pelajaran[0]->id : '/set-guru_pelajaran' ?>" method="post">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <h6 class="h text-gray-900 font-weight-bold">Guru</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <select name="guru" id="guru" class="custom-select my-1 mr-sm-2">
                                    <?php foreach ($option_guru->guru as $dat) { ?>
                                        <option value="<?= $dat->id ?>" <?= $page == 'edit' ?($dat->id == $guru_pelajaran->guru_pelajaran[0]->id_teacher ?'selected' :'') :'' ?>>
                                            <?= $dat->teacher_name ?>
                                        </option>
                                    <?php 
                                    } ?>
                                </select>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Kelas</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <div>
                                    <select class="custom-select my-1 mr-sm-2" id="kelas" name="kelas">
                                        <?php foreach ($option_kelas->data_kelas as $dat) { ?>
                                            <option value="<?= $dat->id ?>" <?= $page == 'edit' ?($dat->id == $guru_pelajaran->guru_pelajaran[0]->id_class ?'selected' :'') :'' ?>>
                                                <?= $dat->class_name ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Tahun</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <div>
                                    <select class="custom-select my-1 mr-sm-2" id="tahun" name="tahun">
                                        <?php foreach ($option_tahun->data_tahun as $dat) { ?>
                                            <option value="<?= $dat->id ?>" <?= $page == 'edit' ?($dat->id == $guru_pelajaran->guru_pelajaran[0]->id_academic_year ?'selected' :'') :'' ?>>
                                                <?= $dat->academic_year ?>
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
                                    <option value="<?= $dat->id ?>" <?= $page == 'edit' ? (in_array($dat->id, $detail_id) ? 'selected' :'') :'' ?>>
                                        <?= $dat->mapel ?>
                                    </option>
                                    <?php
                                    } ?>
                                </select>
                            </div>
                        </div>
                        
                        
                            <!-- <div class="col-md-2 mt-auto mb-auto">
                                <div class="d-flex flex-wrap text-center">
                                    <div class="col-12">
                                        <a data-toggle="modal" class="add-mapel-btn">
                                            <i class="ri-arrow-right-circle-line" style="font-size: 48px;" data-toggle="tooltip" title="Select"></i>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a data-toggle="modal" class="remove-mapel-btn">
                                            <i class="ri-arrow-left-circle-line" style="font-size: 48px;" data-toggle="tooltip" title="Unselect"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <select multiple class="form-control" id="selected_mapel" size="10">
                                </select>
                            </div> -->
                            <!-- <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Mata pelajaran</h6>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="my-1">
                                    <input type="checkbox" id="Agama" name="Agama" value="Bike">
                                    <label for="Agama"> Agama</label>
                                </div>
                                <div class="my-1">
                                    <input type="checkbox" id="BI" name="BI" value="Car">
                                    <label for="BI">BI</label>
                                </div>
                                <div class="my-1">
                                    <input type="checkbox" id="Matematika" name="Matematika" value="Boat">
                                    <label for="Matematika">Matematika</label>
                                </div>
                            </div> -->
                            <div class="col-12 d-flex justify-content-end mb-3 pt-5">
                                <button class="btn text-light mx-1" style="min-width: 6rem; background-color: #845EF7; border-radius: 8px" type="submit">Simpan</button>
                            </div> 
                        </div>                        
                    </form>
                </div>
            </div>            
        </div>
    </div>
<script src="<?= base_url(); ?>/js/form-set_guru_pelajaran.js"></script>
    
<?= $this->endsection(); ?>