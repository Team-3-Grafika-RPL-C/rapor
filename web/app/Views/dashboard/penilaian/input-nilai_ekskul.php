<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Input Nilai Ekstrakurikuler</h1>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Nilai Siswa</h4>
    </div>
    <div class="mx-3">
                <div class="container">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4 mb-4 mt-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Ekstrakurikuler</h6>
                            </div>
                            <div class="col-md-8 mb-4 mt-4">
                                <div>
                                    <select class="custom-select my-1 mr-sm-2" id="mapel">
                                        <option>Tari</option>
                                        <option>Pramuka</option>
                                        <option>Basket</option>
                                        <option>Olimpiade</option>
                                        <option>TIK</option>
                                        <option>Paskibra</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Kelas</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <div>
                                    <select class="custom-select my-1 mr-sm-2" id="kelas">
                                        <option>1A</option>
                                        <option>1B</option>
                                        <option>2A</option>
                                        <option>2B</option>
                                        <option>31</option>
                                        <option>3B</option>
                                        <option>4A</option>
                                        <option>4B</option>
                                        <option>5A</option>
                                        <option>5B</option>
                                        <option>6A</option>
                                        <option>6B</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end text-right">
                            <div class="col mb-4">
                                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4 tampilkan-btn" href="#!" style="min-width: 5rem; background-color: #845EF7; border-radius: 8px">
                                    <span class="d-flex">Tampilkan</span>
                                </a>
                            </div>
                        </div>
                        
                    </div>

</div>
<!-- /.container-fluid -->

</div>
            <div class="card card shadow mb-4 mt-3 none d-none">
                <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="col-1 text-center">No</th>
                                            <th class="col-5 text-center">Nama</th>
                                            <th class="col-3 text-center">Nilai</th>
                                            <th class="col-3 text-center">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>1</td>
                                            <td>Umar bin Khattab</td>
                                            <td>80</td>
                                            <td>
                                                <a href="" class="btn btn-warning btn-rounded">
                                                    <i class="ri-pencil-fill" title="Edit"></i>
                                                </a>
                                                <a href="" class="btn btn-danger btn-rounded">
                                                    <i class="ri-delete-bin-7-fill" title="Delete"></i>
                                                </a>
                                                <button type="button" class="btn btn-success btn-rounded my-1"  data-toggle="modal" data-target="#modalInputEkskul">
                                                    <i class="ri-add-fill" data-toggle="tooltip" title="Edit"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Taufiqi Hidayat</td>
                                            <td> </td>
                                            <td>
                                                <a href="" class="btn btn-warning btn-rounded">
                                                    <i class="ri-pencil-fill" title="Edit"></i>
                                                </a>
                                                <a href="" class="btn btn-danger btn-rounded">
                                                    <i class="ri-delete-bin-7-fill" title="Delete"></i>
                                                </a>
                                                <button type="button" class="btn btn-success btn-rounded my-1"  data-toggle="modal" data-target="#modalInputEkskul">
                                                    <i class="ri-add-fill" data-toggle="tooltip" title="Edit"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
                <!-- MODAL -->
                    <div class="modal fade" id="modalInputEkskul" tabindex="-1" aria-labelledby="modalcatatanLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="modalcatatanLabel">Input Nilai</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form action="catatan-semester-form/${value.id}" method="post">
                                <div class="modal-body">
                                    <label for="message-text" class="col-form-label">Nama Siswa:</label>
                                    <input type="text" autocomplete="off" class="form-control" id="nama-siswa" name="Nama Siswa" value="Taufiqi Hidayat" readonly>
                                    <label for="message-text" class="col-form-label">Ekstrakurikuler:</label>
                                    <input type="text" autocomplete="off" class="form-control" id="ekskul" name="Ekskul" value="Tari" readonly>
                                    <label for="message-text" class="col-form-label">Nilai:</label>
                                    <input type="text" autocomplete="off" class="form-control" id="nilai" name="Nilai">
                                    <label for="message-text" class="col-form-label">Deskripsi:</label>
                                    <textarea class="form-control" name="desc" id="desc" cols="30" rows="5"></textarea>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-indigo">Simpan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>    
<script src="<?= base_url(); ?>/js/input-nilai_ekskul.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    