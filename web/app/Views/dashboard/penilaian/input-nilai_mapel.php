<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Input Nilai Mata Pelajaran</h1>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Nilai Siswa</h4>
    </div>
    <div class="mx-3">
                <div class="container">
                    <form action="" method="post">
                        <input type="hidden" id="base_url" value="<?=base_url()?>">
                        <input type="hidden" id="input_mapel" name="id_subjects" />
                        <input type="hidden" id="input_kelas" name="id_class" />
                        <div class="row">
                            <div class="col-md-4 mb-4 mt-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Mata Pelajaran</h6>
                            </div>
                            <div class="col-md-8 mb-4 mt-4">
                                <div>
                                    <select class="custom-select my-1 mr-sm-2" id="mapel">
                                        <?php foreach ($option_mapel->data_mapel as $om) { ?>
                                            <option value="<?= $om->id ?>">
                                                <?= $om->subject_name ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Kelas</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <div>
                                    <select class="custom-select my-1 mr-sm-2" id="kelas">
                                        <?php foreach ($option_kelas->data_kelas as $ok) { ?>
                                            <option value="<?= $ok->id ?>">
                                                <?= $ok->class_name ?>
                                            </option>
                                        <?php } ?>
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
                        <div class="card-body d-none">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <div class="row justify-content-end text-right">
                                        <div class="col mb-4">
                                        <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/input-nilai-mapel/form" style="min-width: 5rem; background-color: #845EF7; border-radius: 16px">
                                            <span class="d-flex">
                                                <i class="ri-add-line mt-auto mb-auto mr-1" style="font-size: 14px;"></i>
                                                Input
                                            </span>
                                        </a>
                                        </div>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Nilai</th>
                                            <th class="text-center">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody-table">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

</div>
<!-- /.container-fluid -->

</div>
<script src="<?= base_url(); ?>/js/input-nilai_mapel.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    
