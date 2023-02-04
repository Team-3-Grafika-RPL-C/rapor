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
                        <th class="text-center">No</th>
                        <th class="text-center">NIP</th>
                        <th class="text-center">Nama Guru</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Aktif</th>
                        <th class="text-center">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>1</td>
                            <td>201022029</td>
                            <td>Solikin, S.Pd</td>
                            <td>Jl. Hamid Rusdi No.12</td>
                            <td class="text-center">
                                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="" style="min-width: 5rem; background-color: #21976B; border-radius: 8px">
                                    <span class="d-flex">AKTIF</span>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url(); ?>/set-guru_pelajaran/form-detail" class="btn btn-info btn-rounded">
                                    <i class="ri-information-fill" data-toggle="tooltip" title="Detail"></i>
                                </a>
                                <a href="" class="btn btn-warning btn-rounded">
                                    <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-rounded">
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