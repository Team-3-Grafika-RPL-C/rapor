<?= $this->extend('templates/admin-template.php'); ?>
<?= $this->section('conten'); ?>

<div class="container-fluid d-block">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Set Guru Ekstrakurikuler</h1>
    </div>
    <div class="card shadow mb-5">
        <!-- Card Header -->
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="h3 mb-0 font-weight-bold text-indigo-500">Form Set Guru Ekskul</h3>
                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/set-guru_ekskul" style="background-color: #845EF7; border-radius: 16px">
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
                                <select name="guru" id="guru" class="custom-select my-1 mr-sm-2">
                                    <option value="1">Dhanang Spd.</option>
                                    <option value="2">Esti Mpd.</option>
                                    <option value="3">Septi Spd.</option>
                                </select>
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
                            <div class="col-md-4 mb-2">
                                <h6 class="h6 text-gray-900 font-weight-bold">Mata pelajaran</h6>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="my-1">
                                    <input type="checkbox" id="Basket" name="Basket" value="Bike">
                                    <label for="Basket"> Basket</label>
                                </div>
                                <div class="my-1">
                                    <input type="checkbox" id="Paskibra" name="Paskibra" value="Car">
                                    <label for="Paskibra">Paskibra</label>
                                </div>
                                <div class="my-1">
                                    <input type="checkbox" id="Futsal" name="Futsal" value="Boat">
                                    <label for="Futsal">Futsal</label>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end mb-3 pt-5">
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
    
<script src="<?= base_url(); ?>/js/form-set_guru_ekskul.js"></script>

<?= $this->endsection(); ?>