<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Input Nilai Mata Pelajaran</h1>
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
                                <h6 class="h6 text-gray-900 font-weight-bold">Mata Pelajaran</h6>
                            </div>
                            <div class="col-md-8 mb-4 mt-4">
                                <div>
                                    <select class="custom-select my-1 mr-sm-2" id="mapel">
                                        <option>Pendidikan Agama dan Budi Pekerti</option>
                                        <option>Pendidikan Pancasila</option>
                                        <option>Bahasa Indonesia</option>
                                        <option>Matematika</option>
                                        <option>Ilmu Pengetahuan Alam dan Sosial</option>
                                        <option>Pendidikan Jasmani Olahraga dan Kesehatan</option>
                                        <option>Seni Musik</option>
                                        <option>Seni Teater</option>
                                        <option>Seni Tari</option>
                                        <option>Seni Rupa</option>
                                        <option>Bahasa Inggris</option>
                                        <option>Bahasa Jawa</option>
                                    </select>
                                </div>
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
                                        <option value="5">31</option>
                                        <option value="6">3B</option>
                                        <option value="7">4A</option>
                                        <option value="8">4B</option>
                                        <option value="9">5A</option>
                                        <option value="10">5B</option>
                                        <option value="11">6A</option>
                                        <option value="12">6B</option>
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
                                    <div class="row justify-content-end text-right">
                                        <div class="col mb-4">
                                        <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/input-nilai-mapel/form" style="min-width: 5rem; background-color: #845EF7; border-radius: 16px">
                                            <span class="d-flex">
                                                <i class="ri-add-line mt-auto mb-auto mr-1" style="font-size: 14px;"></i>
                                                Input
                                            </span>
                                        </a>
                                        </div>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th class="text-center"></th>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Nilai</th>
                                            <th class="text-center">ACTION</th>
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
                                            <td>99</td>
                                            </td>
                                            <td class="text-center">
                                                <a href="<?= base_url(); ?>/input-nilai-mapel/form-detail" class="btn btn-info btn-rounded">
                                                    <i class="ri-information-fill" title="Detail"></i>
                                                </a>
                                                <a href="" class="btn btn-warning btn-rounded">
                                                    <i class="ri-pencil-fill" title="Edit"></i>
                                                </a>
                                                <a href="" class="btn btn-danger btn-rounded">
                                                    <i class="ri-delete-bin-7-fill" title="Delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>Taufiqi Hidayat</td>
                                            <td> </td>
                                            </td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-info btn-rounded">
                                                    <i class="ri-information-fill" title="Detail"></i>
                                                </a>
                                                <a href="" class="btn btn-warning btn-rounded">
                                                    <i class="ri-pencil-fill" title="Edit"></i>
                                                </a>
                                                <a href="" class="btn btn-danger btn-rounded">
                                                    <i class="ri-delete-bin-7-fill" title="Delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

</div>
<!-- /.container-fluid -->

</div>
<script src="<?= base_url(); ?>/js/input-nilai_mapel.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    