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
    </div>
    <div class="mx-3">
                <div class="container">
                    <form action="" method="POST">
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
                                    <label class="control-label col-xs-3 col-lg-3 font-weight-bold text-gray-900">Semester</label>
                                    <div class="col-xs-2 col-lg-9">
                                        <select id="inputState" class="form-control">
                                            <option>Ganjil</option>
                                            <option>Genap</option>
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
                        <th class="col-7 my-auto text-center">Catatan Wali Kelas</th>
                    </tr>
                </thead>
                <tbody class="text-center">                    
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            23423423
                        </td>
                        <td>
                            Faisal Adi Prayugo
                        </td>
                        <td>
                         <textarea class="form-control" name="" id="" cols="67" rows="3"></textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="container row justify-content-center">
                <a class="btn d-sm-inline-block text-light btn-sm px-3 my-2" href="#!" style="min-width: 45rem; background-color: #845EF7; border-radius: 8px" data-toggle="modal" data-target="#data-siswa-modal"><span>Simpan</span></a>
                <a class="btn d-sm-inline-block text-gray-900 btn-sm px-3 my-2" href="#!" style="min-width: 45rem; background-color: #ECEEEF; border-radius: 8px" data-toggle="modal" data-target="#data-siswa-modal"><span>Batal</span></a>
            </div>
        </div>
    </div>
</div>
                        <!-- <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                                    
                                        <thead>
                                            <tr>
                                                <th class="col-1 my-1 text-center">No</th>
                                                <th class="col-1 my-1 text-center">NIS</th>
                                                <th class="col-3 my-1 text-center">Nama</th>
                                                <th class="col-7 my-1 text-center">Catatan Wali Kelas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-1 my-1 text-center">1</td>
                                                <td class="col-1 my-1 text-center">23423423</td>
                                                <td class="col-3 my-1 text-center">Faisal Adi Prayugo</td>                                            
                                                <td class="col-7 my-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius cum iure, nihil veritatis neque reiciendis doloribus accusamus incidunt quis, et dolorum eum. Laboriosam libero sed corrupti nobis tenetur a labore, similique placeat nisi quae, beatae impedit quod! Veniam enim, quaerat incidunt dolor quis accusamus non consectetur, neque dignissimos saepe voluptatibus ipsum quisquam esse repellat repellendus architecto alias modi dicta mollitia id asperiores facilis, corrupti expedita similique. Dolor aspernatur debitis autem nulla incidunt aut, minima rerum modi, itaque laborum est esse, pariatur veritatis eveniet alias corrupti consequatur? Impedit dolorem, minima dolores eaque nemo dicta ipsam laudantium cum corrupti repellat iusto at?</td>                                            
                                            </tr>
                                            <tr>
                                                <td class="col-1 my-1 text-center">2</td>
                                                <td class="col-1 my-1 text-center">323423434</td>
                                                <td class="col-3 my-1 text-center">Abu Bakar As Shiddiq</td>
                                                <td class="col-7 my-1">Abu Bakar As Shiddiq</td>
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
                        </div> -->

<script src="<?= base_url(); ?>/js/ctt-semester.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    