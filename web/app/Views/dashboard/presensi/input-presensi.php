<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Rekap Presensi</h1>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Rekap Presensi Siswa</h4>
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
                        <div class="card-body d-none">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Sakit (Hari)</th>
                                            <th class="text-center">Ijin (Hari)</th>
                                            <th class="text-center">Alpha (Hari)</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Anya Forgerr</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td class="text-center">
                                                <a class="btn btn-info d-sm-inline-block text-light btn-sm shadow px-4 mb-2" href="#!" style="min-width: 5rem; border-radius: 8px" data-toggle="modal" data-target="#data-siswa-modal">
                                                    <span class="d-flex">Input Presensi</span>
                                                </a>
                                                <a class="btn btn-warning d-sm-inline-block text-light btn-sm shadow px-4" href="#!" style="min-width: 5rem; border-radius: 8px" data-toggle="modal" data-target="#data-siswa-modal">
                                                    <span class="d-flex">Ubah Presensi</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- modal -->
                    <div class="modal fade" id="data-siswa-modal" tabindex="-1" aria-labelledby="data-siswa-modalTitle" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="m-0 font-weight-bold text-indigo-900">Input Presensi</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            <div class="modal-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <h6 class="h6 text-gray-900 font-weight-bold">Nama Siswa</h6>
                                    </div>
                                    <div class="col-md-8 mb-4">
                                        <input type="text" autocomplete="off" class="form-control" id="nama-siswa" name="Nama Siswa" value="Anya Forgerr" readonly>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <h6 class="h6 text-gray-900 font-weight-bold">Kelas</h6>
                                    </div>
                                    <div class="col-md-8 mb-4">
                                        <input type="text" autocomplete="off" class="form-control" id="Kelas" name="Kelas" value="1A" readonly>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <h6 class="h6 text-gray-900 font-weight-bold">Tahun Pelajaran</h6>
                                    </div>
                                    <div class="col-md-8 mb-4">
                                        <input type="text" autocomplete="off" class="form-control" id="Tahun-pelajaran" name="Tahun Pelajaran" value="2023" readonly>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <h6 class="h text-gray-900 font-weight-bold">Sakit (Hari)</h6>
                                    </div>
                                    <div class="col-md-8 mb-4">
                                        <input type="text" autocomplete="off" class="form-control" id="sakit" name="Sakit">
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <h6 class="h6 text-gray-900 font-weight-bold">Ijin (Hari)</h6>
                                    </div>
                                    <div class="col-md-8 mb-4">
                                        <input type="text" autocomplete="off" class="form-control" id="ijin" name="Ijin">
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <h6 class="h6 text-gray-900 font-weight-bold">Alpha (Hari)</h6>
                                    </div>
                                    <div class="col-md-8 mb-4">
                                        <input type="text" autocomplete="off" class="form-control" id="alpha" name="Alpha">
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div class="modal-footer">
                                <a class="btn text-light" style="min-width: 5rem; background-color: #845EF7; border-radius: 8px">Simpan</a>
                            </div>
                            </div>
                        </div>
                    </div>
</div>
<!-- /.container-fluid -->

</div>
<script src="<?= base_url(); ?>/js/input-nilai_ekskul.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    