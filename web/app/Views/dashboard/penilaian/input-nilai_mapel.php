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
                        <input type="hidden" id="input_mapel" name="id_subject" />
                        <input type="hidden" id="input_kelas" name="id_class" />
                        <input type="hidden" id="input_tahun" name="id_academic_year" />
                        <div class="row">
                            <div class="col-md-4 mb-4 mt-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Kelas</h6>
                            </div>
                            <div class="col-md-8 mb-4 mt-4">
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
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Tahun Ajaran</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <div>
                                        <select class="custom-select my-1 mr-sm-2" id="tahun">
                                            <?php foreach ($option_tahun->data_tahun as $ot) { ?>
                                                <option value="<?= $ot->id ?>">
                                                    <?= $ot->academic_year ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Mata Pelajaran</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <div>
                                    <select class="custom-select my-1 mr-sm-2" id="mapel">
                                        
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
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <div class="card shadow mb-4 mt-3 none d-none">
                <div class="card-body">
                        <div class="row justify-content-end my-3">
                            <a class="btn d-flex justify-content-center btn-indigo shadow" style="min-width: 5rem; border-radius:8px;" data-toggle="modal" data-target="#modalInputData">
                                <i class="ri-add-fill"></i>
                                <span class="d-none d-md-block">Input Data</span>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                                
                                <thead>
                                    <tr>
                                        <th class="col-1 text-center">No</th>
                                        <th class="col-5 text-center">Nama</th>
                                        <th class="col-4 text-center">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center" id="tbody-table">    

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


                <!-- MODAL -->
                <div id="modal-root">
                    
                </div>

                <!-- MODAL INPUT DATA -->
                <div class="modal fade" id="modalInputData" tabindex="-1" aria-labelledby="modalcatatanLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="modalcatatanLabel">Input Nilai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <form action="" method="post">
                                    <div class="modal-body">
                                        <label for="message-text" class="col-form-label ">Nama Siswa:</label>
                                        <select name="Nama Siswa" id="nama_siswa" class="custom-select">
                                            <option value="0">Muhammad Sumubl</option>
                                            <option value="1">Khidir Karawita</option>
                                        </select>
                                        <label for="message-text" class="col-form-label">Mapel:</label>
                                        <input type="text" autocomplete="off" class="form-control" id="mata-pelajaran" name="mata-pelajaran" value="Pendidikan Agama dan Budi Pekerti" readonly>
                                        <label for="message-text" class="col-form-label">Capaian Pembelajaran:</label>
                                        <input type="text" autocomplete="off" class="form-control" id="capaian_pembelajaran" name="Capaian Pembelajaran">
                                        <label for="message-text" class="col-form-label">Tujuan Pembelajaran:</label>
                                        <textarea autocomplete="off" class="form-control" id="tp" name="tp" rows="3"></textarea>
                                        <label for="message-text" class="col-form-label">Nilai:</label>
                                        <input type="text" autocomplete="off" class="form-control" id="nilai" name="nilai">
    
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-indigo">Simpan</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>  
                    </div>


<script src="<?= base_url(); ?>/js/input-nilai_mapel.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    
