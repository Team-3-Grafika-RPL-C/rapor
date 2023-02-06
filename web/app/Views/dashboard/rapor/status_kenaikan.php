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
    </div>
    <div class="mx-3">
                <div class="container">
                    <form action="" method="post">
                        <div class="row">
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
                            <div class="col-md-6 my-4">
                                
                            </div>       
                        </div>
                        <div class="row justify-content-end text-right">
                            <div class="col mb-4">
                                
                            </div>
                        </div>
                        <div class="card-body d-none">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                                    
                                    <thead>
                                        <tr>
                                            <th class="col-1 my-1 text-center">No</th>
                                            <th class="col-2 my-1 text-center">NIS</th>
                                            <th class="col-4 my-1 text-center">Nama</th>
                                            <th class="col-5 my-1 text-center">Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td class="col-1 my-1">1</td>
                                            <td class="col-2 my-1">23423423</td>
                                            <td class="col-4 my-1">Faisal Adi Prayugo</td>                                            
                                            <td class="col-5 my-1">
                                                <button class="btn btn-success">Lulus</button>
                                                <button class="btn btn-danger">Tidak Lulus</button>
                                            </td>                                            
                                        </tr>
                                        <tr>
                                            <td class="col-1 my-1">2</td>
                                            <td class="col-2 my-1">323423434</td>
                                            <td class="col-4 my-1">Abu Bakar As Shiddiq</td>
                                            <td class="col-5 my-1">
                                                <button class="btn btn-success">Lulus</button>
                                                <button class="btn btn-danger">Tidak Lulus</button>                                            
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row my-2 justify-content-center text-right">
                                        <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="#!" style="min-width: 45rem; background-color: #845EF7; border-radius: 8px" data-toggle="modal" data-target="#data-siswa-modal">
                                            <span>Simpan</span>
                                        </a>
                                </div>
                                <div class="row my-2 justify-content-center text-right">
                                        <a class="btn d-sm-inline-block text-gray-900 btn-sm shadow px-4" href="#!" style="min-width: 45rem; background-color: #ECEEEF; border-radius: 8px" data-toggle="modal" data-target="#data-siswa-modal">
                                            <span>Batal</span>
                                        </a>
                                </div>
                            </div>
                        </div>
</div>
</div>
<!-- /.container-fluid -->

</div>

<script src="<?= base_url(); ?>/js/form-set_siswa_ekskul.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    