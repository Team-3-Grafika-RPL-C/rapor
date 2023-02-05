<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Rekap Nilai Mata Pelajaran</h1>
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
                                            <th class="text-center"></th>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Tari</th>
                                            <th class="text-center">Pramuka</th>
                                            <th class="text-center">Basket</th>
                                            <th class="text-center">Olimpiade</th>
                                            <th class="text-center">TIK</th>
                                            <th class="text-center">Paskibra</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>Umar bin Khattab</td>
                                            <td>-</td>
                                            <td>80</td>
                                            <td>80</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>Taufiqi Hidayat</td>
                                            <td>-</td>
                                            <td>90</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

</div>
<!-- /.container-fluid -->

</div>
<script src="<?= base_url(); ?>/js/input-nilai_ekskul.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    