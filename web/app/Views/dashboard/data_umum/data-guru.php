<?= $this->extend('templates/admin-template.php'); ?>
<?= $this->section('conten'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Data Guru</h1>
        <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/data-guru/form" style="min-width: 5rem; background-color: #845EF7; border-radius: 16px">
            <span class="d-flex">
                <i class="ri-add-line mt-auto mb-auto mr-1" style="font-size: 14px;"></i>
                Tambah
            </span>
        </a>
    </div>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Data Guru</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="col-1 my-auto text-center">No</th>
                            <th class="col-4 my-auto text-center">Nama</th>
                            <th class="col-2 my-auto text-center">NIP</th>
                            <th class="col-2 my-auto text-center">Jenis Kelamin</th>
                            <th class="col-3 my-auto text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>Dian Retno, S.Pd</td>
                            <td>21202020202</td>
                            <td>Perempuan</td>
                            <td>
                                <a href="<?= base_url(); ?>/data-guru/form-detail" class="btn btn-info btn-rounded my-1">
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
                            <td>Gunawan Dwiyono, S.Pd</td>
                            <td>212020254402</td>
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
                            <td>3</td>
                            <td>Solikin, S.Pd</td>
                            <td>212987020202</td>
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
                            <td>Vira Alfita, M.Pd</td>
                            <td>55203838202</td>
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
                            <td>5</td>
                            <td>Bagaskara, M.Pd</td>
                            <td>2120647602</td>
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
                            <td>6</td>
                            <td>Goh Cafriel Chelsea, S.Pd</td>
                            <td>2126280202</td>
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
                            <td>7</td>
                            <td>Faisal Adi, S.Pd</td>
                            <td>21202020202</td>
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
                            <td>Adinda Devina, S.Pd</td>
                            <td>212020254402</td>
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
                            <td>Wayan, S.Pd</td>
                            <td>212987020202</td>
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
                            <td>10</td>
                            <td>Anggraeni Tyas, M.Pd</td>
                            <td>55203838202</td>
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
                            <td>11</td>
                            <td>Yunia, M.Pd</td>
                            <td>2120647602</td>
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
                            <td>12</td>
                            <td>Wawan, S.Pd</td>
                            <td>2126280202</td>
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
                            <td>13</td>
                            <td>Imam, S.Pd</td>
                            <td>2126280202</td>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->
<?= $this->endsection(); ?>