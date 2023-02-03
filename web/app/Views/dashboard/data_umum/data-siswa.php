<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Data Siswa</h1>
        <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/data-siswa/form" style="min-width: 5rem; background-color: #845EF7; border-radius: 16px">
            <span class="d-flex">
                <i class="ri-add-line mt-auto mb-auto mr-1" style="font-size: 14px;"></i>
                Tambah
            </span>
        </a>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Data Siswa</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="col-1 my-auto text-center">No</th>
                            <th class="col-3 my-auto text-center">Nama</th>
                            <th class="col-1 my-auto text-center">NIS</th>
                            <th class="col-2 my-auto text-center">NISN</th>
                            <th class="col-2 my-auto text-center">Jenis Kelamin</th>
                            <th class="col-3 my-auto text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>Riska Nur Rohma</td>
                            <td>32321</td>
                            <td>0012345678</td>
                            <td>Perempuan</td>
                            <td>
                            <a href="<?= base_url(); ?>/data-siswa/form-detail" class="btn btn-info btn-rounded my-1">
                                <i class="ri-information-fill" data-toggle="tooltip" title="Detail"></i>
                            </a>
                            <a href="" class="btn btn-warning btn-rounded my-1">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1">
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Didan Barania</td>
                            <td>32322</td>
                            <td>0012345679</td>
                            <td>Perempuan</td>
                            <td>
                            <a href="" class="btn btn-info btn-rounded my-1">
                                <i class="ri-information-fill" data-toggle="tooltip" title="Detail"></i>
                            </a>
                            <a href="" class="btn btn-warning btn-rounded my-1">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1">
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Fikri Noviansyah</td>
                            <td>32322</td>
                            <td>0012345679</td>
                            <td>Laki-Laki</td>
                            <td>
                            <a href="" class="btn btn-info btn-rounded my-1" data-toggle="modal">
                                <i class="ri-information-fill" data-toggle="tooltip" title="Detail"></i>
                            </a>
                            <a href="" class="btn btn-warning btn-rounded my-1" data-toggle="modal">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1" data-toggle="modal">
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Rafi Ahmad</td>
                            <td>32322</td>
                            <td>0012345679</td>
                            <td>Laki-Laki</td>
                            <td>
                            <a href="" class="btn btn-info btn-rounded my-1" data-toggle="modal">
                                <i class="ri-information-fill" data-toggle="tooltip" title="Detail"></i>
                            </a>
                            <a href="" class="btn btn-warning btn-rounded my-1" data-toggle="modal">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1" data-toggle="modal">
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Dikta</td>
                            <td>32322</td>
                            <td>0012345679</td>
                            <td>Perempuan</td>
                            <td>
                            <a href="" class="btn btn-info btn-rounded my-1" data-toggle="modal">
                                <i class="ri-information-fill" data-toggle="tooltip" title="Detail"></i>
                            </a>
                            <a href="" class="btn btn-warning btn-rounded my-1" data-toggle="modal">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1" data-toggle="modal">
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Livi Renata</td>
                            <td>32322</td>
                            <td>0012345679</td>
                            <td>Perempuan</td>
                            <td>
                            <a href="" class="btn btn-info btn-rounded my-1" data-toggle="modal">
                                <i class="ri-information-fill" data-toggle="tooltip" title="Detail"></i>
                            </a>
                            <a href="" class="btn btn-warning btn-rounded my-1" data-toggle="modal">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1" data-toggle="modal">
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Eric Rafliansyah</td>
                            <td>32322</td>
                            <td>0012345679</td>
                            <td>Laki-Laki</td>
                            <td>
                            <a href="" class="btn btn-info btn-rounded my-1" data-toggle="modal">
                                <i class="ri-information-fill" data-toggle="tooltip" title="Detail"></i>
                            </a>
                            <a href="" class="btn btn-warning btn-rounded my-1" data-toggle="modal">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1" data-toggle="modal">
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Firda Gheitsa</td>
                            <td>32322</td>
                            <td>0012345679</td>
                            <td>Perempuan</td>
                            <td>
                            <a href="" class="btn btn-info btn-rounded my-1" data-toggle="modal">
                                <i class="ri-information-fill" data-toggle="tooltip" title="Detail"></i>
                            </a>
                            <a href="" class="btn btn-warning btn-rounded my-1" data-toggle="modal">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1" data-toggle="modal">
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Elsa Devita</td>
                            <td>32322</td>
                            <td>0012345679</td>
                            <td>Perempuan</td>
                            <td>
                            <a href="" class="btn btn-info btn-rounded my-1" data-toggle="modal">
                                <i class="ri-information-fill" data-toggle="tooltip" title="Detail"></i>
                            </a>
                            <a href="" class="btn btn-warning btn-rounded my-1" data-toggle="modal">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1" data-toggle="modal">
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Didan Barania</td>
                            <td>32322</td>
                            <td>0012345679</td>
                            <td>Perempuan</td>
                            <td>
                            <a href="" class="btn btn-info btn-rounded my-1" data-toggle="modal">
                                <i class="ri-information-fill" data-toggle="tooltip" title="Detail"></i>
                            </a>
                            <a href="" class="btn btn-warning btn-rounded my-1" data-toggle="modal">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1" data-toggle="modal">
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
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
<!-- End of Main Content -->
<?= $this->endsection(); ?>                    