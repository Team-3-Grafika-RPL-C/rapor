<?= $this->extend('templates/admin-template.php'); ?>
<?= $this->section('conten'); ?>

<div class="container-fluid d-block">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Capaian Pembelajaran</h1>
    </div>
    <div class="card shadow mb-5">
        <!-- Card Header -->
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="h3 mb-0 font-weight-bold text-indigo-500">Form Capaian Pembelajaran</h3>
                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/data-cp" style="background-color: #845EF7; border-radius: 16px">
                    <span class="d-flex">
                        <i class="ri-logout-box-line  mt-auto mb-auto mr-1"></i>
                        <p class="d-none d-sm-block mt-auto mb-auto">Kembali</p>
                    </span>
                </a>
            </div>
            <!-- Form Data Kelas -->
            <div class="mx-3">
                <div class="container">
                    <form action="<?= $page == 'edit' ? '/data-cp/form-edit/'.$data->cp_detail->id : '/data-cp/form' ?>" method="post">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Kode CP</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="kode_cp" name="kode_cp"
                                value="<?= $page == 'edit' ? $data->cp_detail->learning_outcome_code : '' ?>">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h text-gray-900 font-weight-bold">Deskripsi Capaian</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="cp" name="cp"
                                value="<?= $page == 'edit' ? $data->cp_detail->learning_outcome_description : '' ?>">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-3 mt-5 pt-5">
                            <button class="btn text-light mx-1" style="min-width: 6rem; background-color: #845EF7; border-radius: 8px" type="submit">Simpan</button>
                            <a href="<?= base_url(); ?>/data-cp" class="btn ms-1 text-gray-900" data-toggle="modal" data-target="#cancel" style="min-width: 6rem; background-color: #ECEEEF; border-radius: 8px">Batal</a>
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