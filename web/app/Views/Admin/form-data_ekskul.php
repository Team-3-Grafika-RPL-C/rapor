<?= $this->extend('templates/admin-template.php'); ?>
<?= $this->section('conten'); ?>

<div class="container-fluid d-block">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Ekstrakurikuler</h1>
    </div>
    <div class="card shadow mb-5">
        <!-- Card Header -->
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="h3 mb-0 font-weight-bold text-indigo-500">Form Ekstrakurikuler</h3>
                <a class="btn d-flex text-light btn-sm shadow d-flex" href="<?= base_url(); ?>/data-ekskul" style="background-color: #845EF7; border-radius: 16px">
                    <i class="ri-logout-box-line text-light"></i>
                    <p class="mt-auto mb-auto ml-2 d-none d-md-block">Kembali</p>
                </a>
            </div>
            <!-- Form Data Kelas -->
            <div class="mx-3">
                <div class="container">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Ekstrakurikuler</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="ekstrakurikuler" name="Ekstrakurikuler">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h text-gray-900 font-weight-bold">KKM</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="kkm" name="KKM">
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Keterangan</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input type="text" autocomplete="off" class="form-control" id="keterangan" name="Keterangan">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-3 mt-5 pt-5">
                            <button class="btn text-light mx-1" style="min-width: 6rem; background-color: #845EF7; border-radius: 8px" type="submit">Simpan</button>
                            <a href="<?= base_url(); ?>/data-ekskul" class="btn ms-1 text-gray-900" data-toggle="modal" data-target="#cancel" style="min-width: 6rem; background-color: #ECEEEF; border-radius: 8px">Batal</a>
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