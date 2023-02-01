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
                            <th class="text-center">No</th>
                            <th class="text-center">Kode Mapel</th>
                            <th class="text-center">Nama Mapel</th>
                            <th class="text-center">KKM Pelajaran</th>
                            <th class="text-center">Tingkat</th>
                            <th class="text-center">Tahun Ajaran</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>GRF-1987</td>
                            <td>Pendidikan Agama dan Budi Pekerti</td>
                            <td>75</td>
                            <td>I</td>
                            <td>2022-2023</td>
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
                            <td>GRF-1988</td>
                            <td>Pendidikan Pancasila</td>
                            <td>75</td>
                            <td>I</td>
                            <td>2022-2023</td>
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
                            <td>GRF-1989</td>
                            <td>Bahasa Indonesia</td>
                            <td>75</td>
                            <td>I</td>                            
                            <td>2022-2023</td>
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
                            <td>GRF-1990</td>
                            <td>Matematika</td>
                            <td>75</td>
                            <td>I</td>                            
                            <td>2022-2023</td>
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
                            <td>GRF-1991</td>
                            <td>Ilmu Pengetahuan Alam dan Sosial</td>
                            <td>75</td>
                            <td>I</td>                            
                            <td>2022-2023</td>
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
                            <td>GRF-1992</td>
                            <td>Pendidikan Jasmani Olahraga dan Kesehatan</td>
                            <td>75</td>
                            <td>I</td>                            
                            <td>2022-2023</td>
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
                            <td>GRF-1993</td>
                            <td>Seni dan Budaya</td>
                            <td>75</td>
                            <td>I</td>                            
                            <td>2022-2023</td>
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
                            <td>8</td>
                            <td>GRF-1994</td>
                            <td>Bahasa Inggris</td>
                            <td>75</td>
                            <td>I</td>                            
                            <td>2022-2023</td>
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
                            <td>GRF-1991</td>
                            <td>Bahasa Jawa</td>
                            <td>75</td>
                            <td>I</td>                            
                            <td>2022-2023</td>
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