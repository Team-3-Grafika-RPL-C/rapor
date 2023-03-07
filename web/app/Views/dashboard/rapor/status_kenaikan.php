<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Status Kenaikan</h1>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Status Kenaikan</h4>
        <input type="hidden" id="base_url" value="<?=base_url()?>" />
    </div>
    <div class="mx-3">
                <div class="container">
                    <form action="" method="post">
                    <input type="hidden" id="input_tahun" name="id_academic_year" />
                    <input type="hidden" id="input_kelas" name="id_class" />
                        <div class="row">
                            <div class="col-md-4 my-4">
                                <label class="control-label font-weight-bold text-gray-900">Kelas</label>
                            </div>
                            <div class="col-md-8 my-4">
                                <select class="custom-select my-1 mr-sm-2" id="kelas">
                                    <?php foreach ($option_kelas->data_kelas as $ok) { ?>
                                        <option value="<?= $ok->id ?>">
                                            <?= $ok->class_name ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-4 mb-4">
                                <label class="control-label font-weight-bold text-gray-900">Tahun</label>
                            </div>
                            <div class="col-md-8 mb-4">
                                <select class="custom-select my-1 mr-sm-2" id="tahun">
                                    <?php foreach ($option_tahun->data_tahun as $ot) { ?>
                                        <option value="<?= $ot->id ?>">
                                            <?= $ot->academic_year ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-end text-right">
                            <div class="col mb-4">
                                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4 tampilkan-btn" href="#!" style="min-width: 5rem; background-color: #845EF7; border-radius: 8px">
                                    <span class="d-flex">
                                        <i class="ri-search-line mt-auto mb-auto mr-1"></i>
                                        <p class="d-none d-sm-block mt-auto mb-auto">Cari</p>
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->
                
            </div>
            
            <div class="card shadow mb-4 mt-3 none d-none">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                                    
                            <thead>
                                <tr>
                                    <th class="col-1 my-1 text-center">No</th>
                                    <th class="col-3 my-1 text-center">NIS</th>
                                    <th class="col-4 my-1 text-center">Nama</th>
                                    <th class="col-2 my-1 text-center">Status</th>
                                    <th class="col-2 my-1 text-center">Pilihan</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" id="tbody-table">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
<script src="<?= base_url(); ?>/js/status-kenaikan.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    