<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Rapor Semester</h1>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="mx-3">
        <div class="container">
            <h4 class="m-0 font-weight-bold text-indigo-900 mt-3">Form Rapor Semester</h4>
            <div class="row justify-content-end text-right">
                <div class="col mb-4">
                    <a class="btn d-sm-inline-block text-light btn-sm shadow px-4 my-1 tampilkan-btn" href="#!" style="min-width: 5rem; background-color: #1C7ED6; border-radius: 8px">
                        <span class="d-flex">Data Rapor</span>
                    </a>
                    <a class="btn d-sm-inline-block text-light btn-sm shadow px-4 my-1" href="" style="min-width: 5rem; background-color: #21976B; border-radius: 8px">
                        <span class="d-flex">Format Rapor</span>
                    </a>
                    <a class="btn d-sm-inline-block text-light btn-sm shadow px-4my-1 " href="<?= base_url(); ?>/rapor-semester" style="background-color: #845EF7; border-radius: 8px">
                        <span class="d-flex">
                            <i class="ri-logout-box-line  mt-auto mb-auto mr-1"></i>
                            <p class="d-none d-sm-block mt-auto mb-auto">Kembali</p>
                        </span>
                    </a>
                </div>
            </div>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6 my-4 d-flex justify-content-between">
                        <label class="control-label col-xs-3 col-lg-3 font-weight-bold text-gray-900">Tahun Ajaran</label>
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
                    <div class="col-md-6 my-4 d-flex justify-content-between">
                        <label class="control-label col-xs-3 col-lg-3 font-weight-bold text-gray-900">Siswa</label>
                        <div class="col-xs-2 col-lg-9">
                            <select id="inputState" class="form-control">
                                <option>Muhammad Sumbul</option>
                                <option>Khidir Karawita</option>
                                <option>Vira Alfita</option>
                                <option>Bagaskara adhi pradana</option>
                                <option>Eric Rafliansah</option>
                                <option>Adinda Mirza Devina</option>
                                <option>Yudha Pratama</option>
                                <option>Yudha Pratama</option>
                            </select>
                        </div>
                    </div>                
                    <div class="col-md-6 my-4 d-flex justify-content-between">
                        <label class="control-label col-xs-3 col-lg-3 font-weight-bold text-gray-900">Semester</label>
                        <div class="col-xs-2 col-lg-9">
                            <select id="inputState" class="form-control">
                                <option>Ganjil</option>
                                <option>Genap</option>
                            </select>
                        </div>
                    </div>                
                    <div class="col-md-6 my-4 d-flex justify-content-between">
                        <label class="control-label col-xs-3 col-lg-3 font-weight-bold text-gray-900">Tanggal Penerima</label>
                        <div class="col-xs-2 col-lg-9">
                            <div class="md-form md-outline input-with-post-icon datepicker">
                                <input placeholder="Select date" type="date" id="example" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="iframe d-none">
    <iframe src="<?= base_url(); ?>/assets/pdf/Format Rapor Semester.pdf" frameborder="0" scrolling="auto" height="100%" width="100%" id="pdf" style="min-height: 147rem"></iframe>
</div>
<!-- MODAL -->
<div class="modal fade" id="data-siswa-modal" tabindex="-1" aria-labelledby="data-siswa-modalTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
             <div class="modal-header">
                <h4 class="m-0 font-weight-bold text-indigo-900">Data Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                                <th class="text-center">No</th>
                                <th class="text-center">NIS</th>
                                <th class="text-center">Nama</th>
                            </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                </div>
                            </td>
                            <td>1</td>
                            <td>23423423</td>
                            <td>Rosalia Shelly Wulandari</td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                </div>
                            </td>
                            <td>2</td>
                            <td>23423322</td>
                            <td>Vira Alfita Yunia</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <a class="btn text-light" style="min-width: 5rem; background-color: #845EF7; border-radius: 8px">Tambahkan</a>
            </div>
            </div>
        </div>
    </div>
</div>    
<!-- /.container-fluid -->

</div>
<script src="<?= base_url(); ?>/js/rapor-semester.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    