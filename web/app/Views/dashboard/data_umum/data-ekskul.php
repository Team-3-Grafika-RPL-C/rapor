<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Ekskul</h1>
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
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Ekskul</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-1 my-auto text-center">No</th>
                        <th class="col-4 my-auto text-center">Ekskul</th>
                        <th class="col-4 my-auto text-center">Keterangan</th>
                        <th class="col-3 my-auto text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>1</td>
                        <td>TIK</td>
                        <td>Pembina: Nganu</td>
                        <td>
                            <a href="" class="btn btn-warning btn-rounded my-1">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1" data-target="#delete">
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bahasa Jepang</td>
                        <td>Pembina: Nganu</td>
                        <td>                            
                            <a href="" class="btn btn-warning btn-rounded my-1" data-toggle="modal">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1" data-toggle="modal" data-target="#delete" >
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Karate</td>
                        <td>Pembina: Nganu</td>
                        <td>                            
                            <a href="" class="btn btn-warning btn-rounded my-1" data-toggle="modal">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1" data-toggle="modal" data-target="#delete" >
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Pramuka</td>
                        <td>Pembina: Nganu</td>
                        <td>                            
                            <a href="" class="btn btn-warning btn-rounded my-1" data-toggle="modal">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1" data-toggle="modal" data-target="#delete" >
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Paduan Suara</td>
                        <td>Pembina: Nganu</td>
                        <td>                            
                            <a href="" class="btn btn-warning btn-rounded my-1" data-toggle="modal">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1" data-toggle="modal" data-target="#delete" >
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Basket</td>
                        <td>Pembina: Nganu</td>
                        <td>                            
                            <a href="" class="btn btn-warning btn-rounded my-1" data-toggle="modal">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1" data-toggle="modal" data-target="#delete" >
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Paskibra</td>
                        <td>Pembina: Nganu</td>
                        <td>                            
                            <a href="" class="btn btn-warning btn-rounded my-1" data-toggle="modal">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded my-1" data-toggle="modal" data-target="#delete" >
                                <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="alertModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content py-4">
            <div class="modal-body">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <p class="p">apakah anda yakin akan menghapus data ini?</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <a href="" class="btn btn d-sm-inline-block text-light btn-sm shadow px-4 col-2" style="min-width: 5rem; background-color: #845EF7; border-radius: 16px">ya</a>
                            <a href="" class="btn btn d-sm-inline-block text-dark btn-sm shadow px-4 col-2"style="min-width: 5rem; background-color: #F8F9F9;border-color:#C8CDD0; border-radius: 16px">tidak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endsection(); ?>                    