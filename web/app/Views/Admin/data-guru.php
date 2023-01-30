<?= $this->extend('templates/admin-template.php'); ?>
<?= $this->section('conten'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Data Guru</h1>
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
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Kelas</th>
                            <th class="text-center">Tingkat</th>
                            <th class="text-center">Wali Kelas</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1A</td>
                            <td>Satu</td>
                            <td>Dian Retno, S.Pd</td>
                            <td>
                                <a href="" class="btn btn-primary rounded" data-toggle="modal">
                                    <i class="ri-information-fill" data-toggle="tooltip" title="Detail"></i>
                                </a>
                                <a href="" class="edit" data-toggle="modal">
                                    <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                                </a>
                                <a href="" class="delete" data-toggle="modal">
                                    <i class="" data-toggle="tooltip" title="Delete"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1B</td>
                            <td>Satu</td>
                            <td>Gunawan Dwiyono, S.Pd</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2A</td>
                            <td>Dua</td>
                            <td>Solikin, S.Pd</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>2B</td>
                            <td>Dua</td>
                            <td>Vira Alfita, M.Pd</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->
<?= $this->endsection(); ?>