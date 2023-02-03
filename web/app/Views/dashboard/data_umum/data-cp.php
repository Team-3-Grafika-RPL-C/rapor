<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Capaian Pembelajaran</h1>
        <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/data-cp/form" style="min-width: 5rem; background-color: #845EF7; border-radius: 16px">
            <span class="d-flex">
                <i class="ri-add-line mt-auto mb-auto mr-1" style="font-size: 14px;"></i>
                Tambah
            </span>
        </a>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Capaian Pembelajaran</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Kode CP</th>
                        <th scope="col" class="text-center">Capaian Pembelajaran</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>A.1.AGM.1.1</td>
                        <?php $your_text = "Peserta didik mampu bersikap menjadi pendengar yang penuh perhatian. Peserta didik menunjukkan  minat pada tuturan yang didengar serta mampu memahami pesan lisan dan informasi dari media audio, teks aural (teks yang dibacakan dan/atau didengar), instruksi lisan, dan percakapan yang berkaitan dengan tujuan berkomunikasi." ?>
                        <td><?= substr_replace($your_text, "...", 80); ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>/data-cp/form-detail" class="btn btn-info btn-rounded">
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
                    <tr>
                        <td>2</td>
                        <td>A.1.IND.1.1</td>
                        <td><?= substr_replace($your_text, "...", 80); ?></td>
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
                        <td>A.1.ING.1.1</td>
                        <td><?= substr_replace($your_text, "...", 80); ?></td>
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