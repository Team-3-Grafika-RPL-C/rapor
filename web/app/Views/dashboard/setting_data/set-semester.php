<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Set Semester</h1>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Set Semester</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-1 my-auto text-center">No</th>
                        <th class="col-4 my-auto text-center">Semester</th>
                        <th class="col-3 my-auto text-center">Aktif</th>
                        <th class="col-3 my-auto text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $nomer = 1;
                    foreach ($data->data_semester as $dat) {
                    ?>
                        <tr>
                            <td>
                                <?= $nomer ?>
                                <?php $nomer++ ?>
                            </td>
                            <td>
                                <?= $dat->semester ?>
                            </td>
                            <td>
                                <?= $dat->is_active == 1
                                ?
                                '<a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="" style="min-width: 5rem; background-color: #21976B; border-radius: 8px">
                                    <span class="d-flex">AKTIF</span>
                                </a>'
                                :
                                '<a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="" style="min-width: 5rem; background-color: #C70A0A; border-radius: 8px">
                                <span class="d-flex">NON AKTIF</span>
                                </a>'
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($dat->is_active == 1) { ?>
                                    <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url() ?>/nonactive-semester/<?= $dat->id ?>" style="min-width: 5rem; background-color: #C70A0A; border-radius: 8px">
                                    <span class="d-flex">
                                        <i class="ri-close-line mr-2"></i>
                                        NON AKTIFKAN
                                    </span>
                                    </a>
                                <?php
                                } else { ?>
                                    <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url() ?>/active-semester/<?= $dat->id ?>" style="min-width: 5rem; background-color: #21976B; border-radius: 8px">
                                    <span class="d-flex">
                                        <i class="ri-check-line mr-2"></i>
                                        AKTIFKAN
                                    </span>
                                    </a>
                                <?php
                                }?>
                                
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

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endsection(); ?>                    