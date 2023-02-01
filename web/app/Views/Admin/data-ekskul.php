<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Ekstrakurikuler</h1>
        <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/data-ekskul/form" style="min-width: 5rem; background-color: #845EF7; border-radius: 16px">
            <span class="d-flex">
                <i class="ri-add-line mt-auto mb-auto mr-1" style="font-size: 14px;"></i>
                Tambah
            </span>
        </a>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Ekstrakurikuler</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Ekstrakurikuler</th>
                        <th class="text-center">KKM</th>
                        <th class="text-center">Keterangan</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>TIK</td>
                        <td>75</td>
                        <td>Pembina: Bill Gates</td>
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
                    <tr>
                        <td>2</td>
                        <td>Bahasa Jepang</td>
                        <td>75</td>
                        <td>Pembina: Luffy D Monkey</td>
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
                    <tr>
                        <td>3</td>
                        <td>Karate</td>
                        <td>75</td>
                        <td>Pembina: Wuryandaru</td>
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
                    <tr>
                        <td>4</td>
                        <td>Pramuka</td>
                        <td>75</td>
                        <td>Pembina: Agus Putanto</td>
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
                    <tr>
                        <td>5</td>
                        <td>Paduan Suara</td>
                        <td>75</td>
                        <td>Pembina: Rosita</td>
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
                    <tr>
                        <td>6</td>
                        <td>Basket</td>
                        <td>75</td>
                        <td>Pembina: Hanif Hubbudin</td>
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
                    <tr>
                        <td>7</td>
                        <td>Paskibra</td>
                        <td>75</td>
                        <td>Pembina: Ferdi Sambo</td>
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
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endsection(); ?>                    