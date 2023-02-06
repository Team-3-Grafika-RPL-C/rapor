<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Set Pelajaran Kelas</h1>
        <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/set-pelajaran-kelas/form" style="min-width: 5rem; background-color: #845EF7; border-radius: 16px">
            <span class="d-flex">
                <i class="ri-add-line mt-auto mb-auto mr-1" style="font-size: 14px;"></i>
                Set Pelajaran
            </span>
        </a>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Pelajaran Kelas</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-1 my-1 text-center">No</th>
                        <th class="col-2 my-1 text-center">Kelas</th>
                        <th class="col-4 my-1 text-center">Semester</th>
                        <th class="col-5 my-1 text-center">Mata Pelajaran</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>1A</td>
                            <td>Genap</td>
                            <td class="text-left">Pendidikan Agama Islam Kelas 1<br>
                                Pendidikan Pancasila Kelas 1<br>
                                Bahasa Indonesia Kelas 1<br>
                                Matematika Kelas 1<br>
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