<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Set Siswa Ekstrakurikuler</h1>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Set Siswa Ekstrakurikuler</h4>
    </div>
    <div class="mx-3">
                <div class="container">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4 mb-4 mt-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Ekstra</h6>
                            </div>
                            <div class="col-md-8 mb-1 mt-4">
                                <div>
                                    <select class="custom-select my-1 mr-sm-2" id="ekskul">
                                        <?php foreach ($option_ekskul->data_ekskul as $oe) {?>
                                        <option value="<?= $oe->id ?>">
                                            <?= $oe->extracurricular_name ?>
                                        </option>
                                        <?php
                                        }?>
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
                        <input type="hidden" id="base_url_js" value="<?= base_url() ?>">
                        <div class="card-body d-none">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <div class="row justify-content-end text-right">
                                        <div class="col mb-4">
                                            <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" 
                                            href="#!" style="min-width: 5rem; background-color: #845EF7; border-radius: 8px"
                                            data-toggle="modal" data-target="#data-siswa-modal">
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
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody-table">
                                    </tbody>
                                </table>
                            </div>
                        </div>
</div>
<!-- MODAL -->
                    <div class="modal fade" id="data-siswa-modal" tabindex="-1" aria-labelledby="data-siswa-modalTitle" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="m-0 font-weight-bold text-indigo-900">Data Siswa</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            <div class="modal-body">
                                <form action="/set-siswa_ekskul" method="post">
                                    <input type="hidden" id="input_ekskul" name="id_extracurricular" />
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center"></th>
                                            <th class="text-center">No</th>
                                            <th class="text-center">NIS</th>
                                            <th class="text-center">Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $nomer = 1;
                                        foreach ($siswa->siswa as $dat) {?>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="<?= $dat->id ?>" id="flexCheckChecked" name="id_students[]">
                                                </div>
                                            </td>
                                            <td>
                                                <?= $nomer ?>
                                                <?php $nomer++ ?>
                                            </td>
                                            <td>
                                                <?= $dat->nis ?>
                                            </td>
                                            <td>
                                                <?= $dat->student_name ?>
                                            </td>
                                        </tr>
                                        <?php
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <a class="btn text-light" style="min-width: 5rem; background-color: #845EF7; border-radius: 8px">Tambahkan</a>
                            </div>
                            </div>
                        </div>
                    </div>
</div>
<!-- /.container-fluid -->

</div>

<script src="<?= base_url(); ?>/js/form-set_siswa_ekskul.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    