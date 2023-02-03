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
                        <th class="text-center">No</th>
                        <th class="text-center">Semester</th>
                        <th class="text-center">Aktif</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ganjil</td>
                            <td class="text-center">
                                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="" style="min-width: 5rem; background-color: #21976B; border-radius: 8px">
                                    <span class="d-flex">Aktif</span>
                                </a>
                            </td>
                            <td class="text-center">
                                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="" style="min-width: 5rem; background-color: #C70A0A; border-radius: 8px">
                                    <span class="d-flex">
                                        <i class="ri-delete-bin-line mr-2"></i>
                                        Non Aktifkan
                                    </span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Genap</td>
                            <td class="text-center">
                                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="" style="min-width: 5rem; background-color: #21976B; border-radius: 8px">
                                    <span class="d-flex">Aktif</span>
                                </a>
                            </td>
                            <td class="text-center">
                                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="" style="min-width: 5rem; background-color: #C70A0A; border-radius: 8px">
                                    <span class="d-flex">
                                        <i class="ri-delete-bin-line mr-2"></i>
                                        Non Aktifkan
                                    </span>
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