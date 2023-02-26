<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Set Guru Pelajaran</h1>
        <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/set-guru_pelajaran/form" style="min-width: 5rem; background-color: #845EF7; border-radius: 16px">
            <span class="d-flex">
                <i class="ri-add-line mt-auto mb-auto mr-1" style="font-size: 14px;"></i>
                Set Pelajaran
            </span>
        </a>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Guru Pelajaran</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-1 my-auto text-center">No</th>
                        <th class="col-3 my-auto text-center">Nama Guru</th>
                        <th class="col-1 my-auto text-center">Kelas</th>
                        <th class="col-4 my-auto text-center">Tahun Pelajaran</th>
                        <th class="col-2 my-auto text-center">ACTION</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $nomer = 1;
                    foreach ($data->guru_pelajaran as $dat) {
                    ?>
                        <tr>
                            <td>
                                <?= $nomer ?>
                                <?php $nomer++ ?>
                            </td>
                            <td>
                                <?= $dat->teacher_name ?>
                            </td>
                            <td>
                                <?= $dat->class_name ?>
                            </td>
                            <td>
                                <?= $dat->academic_year ?>
                            </td>
                            <td>
                                <a href="<?= base_url(); ?>/set-guru_pelajaran/form-detail" class="btn btn-info btn-rounded">
                                    <i class="ri-information-fill" data-toggle="tooltip" title="Detail"></i>
                                </a>
                                <a href="" class="btn btn-warning btn-rounded">
                                    <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#delete">
                                    <i class="ri-delete-bin-7-fill" data-toggle="tooltip" title="Delete"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
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