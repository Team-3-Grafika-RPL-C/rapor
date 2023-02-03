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
                <h3 class="h3 mb-0 font-weight-bold text-indigo-500">Form Set Guru Ekskul</h3>
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
                                <input type="text" autocomplete="off" class="form-control" id="guru" name="Guru" value="Justin Bieber" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Kelas</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <div>
                                    <select class="custom-select my-1 mr-sm-2" id="kelas">
                                        <option value="1">1A</option>
                                        <option value="2">1B</option>
                                        <option value="3">2A</option>
                                        <option value="4">2B</option>
                                        <option value="1">31</option>
                                        <option value="2">3B</option>
                                        <option value="3">4A</option>
                                        <option value="4">4B</option>
                                        <option value="1">5A</option>
                                        <option value="2">5B</option>
                                        <option value="3">6A</option>
                                        <option value="4">6B</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Tahun</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <div>
                                    <select class="custom-select my-1 mr-sm-2" id="tahun">
                                        <option value="1">2022-2023</option>
                                        <option value="2">2021-2022</option>
                                        <option value="3">2020-2021</option>
                                        <option value="4">2019-2020</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row justify-content-end text-right">
                            <div class="col mb-4">
                                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="" style="min-width: 5rem; background-color: #845EF7; border-radius: 8px">
                                    <span class="d-flex">Tampilkan</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <select multiple class="form-control" id="ekskul" size="10">
                                    <option>Tari</option>
                                    <option>Pramuka</option>
                                    <option>Basket</option>
                                    <option>Olimpiade</option>
                                    <option>TIK</option>
                                    <option>Paskibra</option>
                                </select>
                            </div>
                            <div class="col-md-2 mt-auto mb-auto">
                                <div class="d-flex flex-wrap text-center">
                                    <div class="col-12">
                                        <a data-toggle="modal">
                                            <i class="ri-arrow-right-circle-line" style="font-size: 48px;" data-toggle="tooltip" title="Select"></i>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a data-toggle="modal">
                                            <i class="ri-arrow-left-circle-line" style="font-size: 48px;" data-toggle="tooltip" title="Unselect"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <select multiple class="form-control" id="selected_ekskul" size="10">
                                </select>
                            </div>
                            <div class="d-flex justify-content-end mb-3 mt- pt-5">
                                <button class="btn text-light mx-1" style="min-width: 6rem; background-color: #845EF7; border-radius: 8px" type="submit">Simpan</button>
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