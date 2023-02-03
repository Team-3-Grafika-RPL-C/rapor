<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Set Siswa Kelas</h1>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Set Siswa Kelas</h4>
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
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <div class="row justify-content-end text-right">
                                        <div class="col mb-4">
                                            <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="" style="min-width: 5rem; background-color: #845EF7; border-radius: 8px">
                                            <span class="d-flex">
                                                <i class="ri-add-line mt-auto mb-auto mr-1" style="font-size: 14px;"></i>
                                                Tambah Data
                                            </span>
                                            </a>
                                        </div>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">NIS</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">No Absen</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>23423423</td>
                                            <td>Rosalia Shelly Wulandari</td>
                                            <td class="d-flex justify-content-center">
                                                <input type="text" style="width: 100px;" autocomplete="off" class="form-control" id="no_absen" name="No Absen">
                                            </td>
                                            </td>
                                            <td class="text-center">
                                                    <a href="" class="btn btn-info btn-rounded" data-toggle="modal">
                                                        <i class="ri-information-fill" data-toggle="tooltip" title="Detail"></i>
                                                    </a>
                                                    <a href="" class="btn btn-warning btn-rounded" data-toggle="modal">
                                                        <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                                                    </a>
                                                    <a href="" class="btn btn-danger btn-rounded" data-toggle="modal">
                                                        <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                                                    </a>
                                                </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-3 mt- pt-5">
                                <button class="btn text-light mx-1" style="min-width: 6rem; background-color: #845EF7; border-radius: 8px" type="submit">Simpan No Absen</button>
                        </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endsection(); ?>                    