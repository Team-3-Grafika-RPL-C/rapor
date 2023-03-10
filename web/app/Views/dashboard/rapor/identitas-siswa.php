<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Identitas Siswa</h1>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="mx-3">
        <div class="container">
            <h4 class="m-0 font-weight-bold text-indigo-900 mt-3">Tabel Rapor Semester</h4>            
            <form action="" method="post">
                <div class="row mb-1">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-between my-4">
                            <label class="control-label col-xs-3 col-lg-3 font-weight-bold text-gray-900">Kelas</label>
                            <div class="col-xs-2 col-lg-9">
                                <select id="inputState" class="form-control">
                                    <option>1A</option>
                                    <option>1B</option>
                                    <option>1C</option>
                                    <option>2A</option>
                                    <option>2B</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between my-4">
                            <label class="control-label col-xs-3 col-lg-3 font-weight-bold text-gray-900">Tahun</label>
                            <div class="col-xs-2 col-lg-9">
                                <select id="inputState" class="form-control">
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a class="btn d-sm-inline-block text-light btn-sm shadow px-4 tampilkan-btn" href="#!" style="min-width: 5rem; background-color: #845EF7; border-radius: 8px">
                            <span class="d-flex">
                                <i class="ri-search-line mt-auto mb-auto mr-1"></i>
                                <p class="d-none d-sm-block mt-auto mb-auto">Cari</p>
                            </span>
                            </a>
                        </div>
                    </div>               
                    <div class="col-md-6 my-4 d-flex justify-content-between">
                        
                    </div>                                    
                </div>
            </form>
        </div>
    </div>
</div>
<div class="iframe d-none">
    <!-- <iframe src="<?= base_url(); ?>/assets/pdf/Format Rapor Semester.pdf" frameborder="0" scrolling="auto" height="100%" width="100%" id="pdf" style="min-height: 147rem"></iframe> -->
</div>  
<!-- /.container-fluid -->

</div>
<script src="<?= base_url(); ?>/js/rapor-semester.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    