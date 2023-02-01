<?= $this->extend('templates/admin-template.php'); ?>
<?= $this->section('conten'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Tujuan Pembelajaran</h1>
        <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/data-tp/form" style="min-width: 5rem; background-color: #845EF7; border-radius: 16px">
            <span class="d-flex">
                <i class="ri-add-line mt-auto mb-auto mr-1" style="font-size: 14px;"></i>
                Tambah
            </span>
        </a>
    </div>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Tujuan Pembelajaran</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Kode TP</th>
                            <th class="text-center">Deskripsi Tujuan Pembelajaran</th>
                            <th class="text-center">Mapel</th>
                            <th class="text-center">Semester</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>A.1.AGM.1.1.1</td>
                            <td>Mengetahui rukun iman dan rukun islam</td>
                            <td>Agama</td>
                            <td>Ganjil</td>
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
                            <td>A.1.IND.1.1.2</td>
                            <td>Melakukan instruksi yang dibaca dan didengar</td>
                            <td>Bahasa Indonesia</td>
                            <td>Ganjil</td>
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
                            <td>A.1.ING.1.1.1</td>
                            <td>Berinteraksi dalam situasi sosial dan kelas seperti berkenalan, memberikan informasi diri dengan kalimat sederhana</td>
                            <td>Bahasa Inggris</td>
                            <td>Ganjil</td>
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
<!-- End of Main Content -->
<?= $this->endsection(); ?>