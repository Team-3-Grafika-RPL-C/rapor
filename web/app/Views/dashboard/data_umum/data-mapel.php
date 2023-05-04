<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Data Mata Pelajaran</h1>
        <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/data-mapel/form" style="min-width: 5rem; background-color: #845EF7; border-radius: 16px">
            <span class="d-flex">
                <i class="ri-add-line mt-auto mb-auto mr-1" style="font-size: 14px;"></i>
                Tambah
            </span>
        </a>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Data Mata Pelajaran</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="col-1 my-auto text-center">No</th>
                            <th class="col-2 my-auto text-center">Kode Mapel</th>
                            <th class="col-4 my-auto text-center">Nama Mapel</th>
                            <th class="col-2 my-auto text-center">Tingkat</th>
                            <th class="col-3 my-auto text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php 
                        $nomer = 1;
                        foreach ($data->data_mapel as $dat) {
                        ?>
                        <tr>
                            <td>
                                <?= $nomer ?>
                                <?php $nomer++ ?>
                            </td>
                            <td>
                                <?= $dat->subject_code ?>
                            </td>
                            <td>
                                <?= $dat->subject_name ?>
                            </td>
                            <td>
                                <?= $dat->class ?>
                            </td>
                            <td>
                            <a href="<?=base_url(); ?>/data-mapel/form-edit/<?=$dat->id ?>" class="btn btn-warning btn-rounded my-1">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </a>
                           <a href="" class="btn btn-danger btn-rounded my-1" data-toggle="modal" data-target="#delete">
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
<?php
foreach ($data->data_mapel as $dat) {
?>
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="alertModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content py-4">
            <div class="modal-body">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <p class="p">Apakah anda yakin akan menghapus data ini?</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <a href="<?= base_url() ?>/data-mapel/delete/<?= $dat->id ?>" class="btn btn d-sm-inline-block text-light btn-sm shadow px-4 col-2" style="min-width: 5rem; background-color: #845EF7; border-radius: 16px">Ya</a>
                            <a href="" class="btn btn d-sm-inline-block text-dark btn-sm shadow px-4 col-2"style="min-width: 5rem; background-color: #F8F9F9;border-color:#C8CDD0; border-radius: 16px">Tidak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endsection(); ?>                    