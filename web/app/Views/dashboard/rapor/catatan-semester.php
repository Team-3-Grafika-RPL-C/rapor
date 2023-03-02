<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Catatan Semester</h1>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Catatan Semester</h4>
        <input type="hidden" id="base_url" value="<?=base_url()?>" />
        <input type="hidden" id="input_tahun" name="id_academic_year" />
        <input type="hidden" id="input_kelas" name="id_class" />
    </div>
    <div class="mx-3">
                <div class="container">
                    <form action="" method="POST">
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
                                    <label class="control-label col-xs-3 col-lg-3 font-weight-bold text-gray-900">Semester</label>
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
                                <div class="d-flex justify-content-center">
                                <a class="btn d-sm-inline-block text-light btn-sm shadow px-4 tampilkan-btn" href="#!" style="min-width: 5rem; background-color: #845EF7; border-radius: 8px">
                                    <span class="d-flex">
                                        <i class="ri-search-line mt-auto mb-auto mr-1"></i>
                                        <p class="d-sm-block mt-auto mb-auto">Cari</p>
                                    </span>
                                </a>
                                </div>
                            </div>                                       
                        </div>
                        <div class="row justify-content-end text-right">
                            <div class="col mb-4">
                                
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
                        <th class="col-1 my-auto text-center">No</th>
                        <th class="col-1 my-auto text-center">NIS</th>
                        <th class="col-2 my-auto text-center">Nama</th>                        
                        <th class="col-5 my-auto text-center">Catatan Wali Kelas</th>
                        <th class="col-3 my-auto text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center" id="tbody-table">                    
                    
                </tbody>
            </table>
        </div>
    </div>

<?php 
foreach ($data_siswa[0] as $dat) {
?>
<div class="modal fade" id="modalcatatan<?= $dat->id ?>" tabindex="-1" aria-labelledby="modalcatatanLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalcatatanLabel">Edit Catatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
        <div class="modal-body">
            <label for="message-text" class="col-form-label">Catatan Wali Kelas:</label>
            <textarea class="form-control" id="message-text"></textarea>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
} ?>

<script src="<?= base_url(); ?>/js/ctt-semester.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    