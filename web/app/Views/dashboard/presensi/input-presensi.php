<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Rekap Presensi</h1>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Rekap Presensi Siswa</h4>
        <input type="hidden" id="base_url" value="<?=base_url()?>" />
    </div>
    <div class="mx-3">
                <div class="container">
                    <form action="" method="post">
                    <input type="hidden" id="input_tahun" name="id_academic_year" />
                    <input type="hidden" id="input_kelas" name="id_class" />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex justify-content-between my-4">
                                    <label class="control-label col-xs-3 col-lg-3 font-weight-bold text-gray-900">Kelas</label>
                                    <div class="col-xs-2 col-lg-9">
                                        <select class="custom-select my-1 mr-sm-2" id="kelas">
                                            <?php foreach ($option_kelas->data_kelas as $ok) { ?>
                                                <option value="<?= $ok->id ?>">
                                                    <?= $ok->class_name ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between my-4">
                                    <label class="control-label col-xs-3 col-lg-3 font-weight-bold text-gray-900">Tahun Ajaran</label>
                                    <div class="col-xs-2 col-lg-9">
                                        <select class="custom-select my-1 mr-sm-2" id="tahun">
                                            <?php foreach ($option_tahun->data_tahun as $ot) { ?>
                                                <option value="<?= $ot->id ?>">
                                                    <?= $ot->academic_year ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
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
                        <div class="card shadow mb-4 mt-3 none d-none">    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Sakit (Hari)</th>
                                            <th class="text-center">Ijin (Hari)</th>
                                            <th class="text-center">Alpha (Hari)</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center" id="tbody-table">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>

                    <!-- modal -->
                    <div id="modal-root">
                        
                    </div>
</div>
<!-- /.container-fluid -->

</div>
<script src="<?= base_url(); ?>/js/input-presensi.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    