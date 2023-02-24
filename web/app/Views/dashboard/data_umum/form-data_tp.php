<?= $this->extend('templates/admin-template.php'); ?>
<?= $this->section('conten'); ?>

<div class="container-fluid d-block">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Tujuan Pembelajaran</h1>
    </div>
    <div class="card shadow mb-5">
        <!-- Card Header -->
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="h3 mb-0 font-weight-bold text-indigo-500">Form Tujuan Pembelajaran</h3>
                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/data-tp" style="background-color: #845EF7; border-radius: 16px">
                    <span class="d-flex">
                        <i class="ri-logout-box-line  mt-auto mb-auto mr-1"></i>
                        <p class="d-none d-sm-block mt-auto mb-auto">Kembali</p>
                    </span>
                </a>
            </div>
            <!-- Form Data Kelas -->
            <div class="mx-3">
                <div class="container">
                    <form action="<?= $page == 'edit' ? '/data-tp/form-edit/'.$data->tp_detail->id :'/data-tp/form' ?>" method="post">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Kode</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="kode_tp" name="kode_tp"
                                value = "<?= $page == 'edit' ? $data->tp_detail->learning_purpose_code : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h text-gray-900 font-weight-bold">Deskripsi <br> Tujuan Pembelajaran</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="tp" name="tp"
                                value = "<?= $page == 'edit' ? $data->tp_detail->learning_purpose_description : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Capaian Pembelajaran</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <select name="cp" id="cp" class="custom-select">
                                    <?php foreach ($data_cp->cp as $dat) { ?>
                                    <option value="<?= $dat->id ?>" <?= $page == 'edit' ?($dat->id == $data->tp_detail->id_learning_outcome ?'selected' :'') :'' ?>>
                                        <?= $dat->learning_outcome_description ?>
                                    </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Semester</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <select name="semester" id="semester" class="custom-select">
                                    <?php foreach ($data_semester->semester as $dat) {?>
                                    <option value="<?= $dat->id ?>" <?= $page == 'edit' ?($dat->id == $data->tp_detail->id_semester ?'selected' :'') :'' ?>>
                                        <?= $dat->semester ?>
                                    </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-3 mt-5 pt-5">
                            <button class="btn text-light mx-1" style="min-width: 6rem; background-color: #845EF7; border-radius: 8px" type="submit">Simpan</button>
                            <a href="<?= base_url(); ?>/data-guru" class="btn ms-1 text-gray-900" data-toggle="modal" data-target="#cancel" style="min-width: 6rem; background-color: #ECEEEF; border-radius: 8px">Batal</a>
                        </div>
                    </form>
                </div>
            </div>            
        </div>
    </div>
    
<?= $this->endsection(); ?>