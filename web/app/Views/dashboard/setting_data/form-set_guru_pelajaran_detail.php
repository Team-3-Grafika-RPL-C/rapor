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
                <h3 class="h3 mb-0 font-weight-bold text-indigo-500">Detail Guru Pelajaran</h3>
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
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <h6 class="h text-gray-900 font-weight-bold">Guru</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <select class="custom-select my-1 mr-sm-2" id="guru" name="guru" disabled>
                                    <option value="<?= $data->guru_pelajaran[0]->id_teacher ?>">
                                        <?= $data->guru_pelajaran[0]->teacher_name ?>
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Kelas</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <select class="custom-select my-1 mr-sm-2" id="kelas" name="kelas" disabled>
                                    <option value="<?= $data->guru_pelajaran[0]->id_class ?>">
                                        <?= $data->guru_pelajaran[0]->class_name ?>
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Tahun</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <select class="custom-select my-1 mr-sm-2" id="tahun" name="tahun" disabled>
                                <option value="<?= $data->guru_pelajaran[0]->id_academic_year ?>">
                                        <?= $data->guru_pelajaran[0]->academic_year ?>
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Mapel Ajaran</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <select multiple class="form-control" id="mapel_ajaran" size="8" disabled>
                                    <?php foreach ($detail->guru_pelajaran_detail as $dat) { ?>
                                    <option value="<?= $dat->id_subject ?>">
                                        <?= $dat->subject_name ?>
                                    </option>
                                    <?php
                                    }?>
                                </select>
                            </div>
                        
                        </div>
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