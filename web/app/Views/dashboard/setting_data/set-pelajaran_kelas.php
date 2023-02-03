<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Set Pelajaran Kelas</h1>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Set Pelajaran Kelas</h4>
    </div>
    <div class="mx-3">
                <div class="container">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4 mb-4 mt-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Kelas</h6>
                            </div>
                            <div class="col-md-8 mb-4 mt-4">
                                <div>
                                    <select class="custom-select my-1 mr-sm-2" id="kelas">
                                        <option value="1">1A</option>
                                        <option value="2">1B</option>
                                        <option value="3">2A</option>
                                        <option value="4">2B</option>
                                        <option value="1">31</option>
                                        <option value="2">3B</option>
                                        <option value="3">4A</option>
                                        <option value="4">4B</option>
                                        <option value="1">5A</option>
                                        <option value="2">5B</option>
                                        <option value="3">6A</option>
                                        <option value="4">6B</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="h6 text-gray-900 font-weight-bold">Semester</h6>
                            </div>
                            <div class="col-md-8 mb-4">
                                <div>
                                    <select class="custom-select my-1 mr-sm-2" id="semester">
                                        <option value="1">Ganjil</option>
                                        <option value="2">Genap</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <select multiple class="form-control" id="mapel" size="10">
                                    <option>Pendidikan Agama dan Budi Pekerti Kelas 1</option>
                                    <option>Pendidikan Agama dan Budi Pekerti Kelas 2</option>
                                    <option>Pendidikan Agama dan Budi Pekerti Kelas 3</option>
                                    <option>Pendidikan Agama dan Budi Pekerti Kelas 4</option>
                                    <option>Pendidikan Agama dan Budi Pekerti Kelas 5</option>
                                    <option>Pendidikan Agama dan Budi Pekerti Kelas 6</option>
                                    <option>Pendidikan Pancasila Kelas 1</option>
                                    <option>Pendidikan Pancasila Kelas 2</option>
                                    <option>Pendidikan Pancasila Kelas 3</option>
                                    <option>Pendidikan Pancasila Kelas 4</option>
                                    <option>Pendidikan Pancasila Kelas 5</option>
                                    <option>Pendidikan Pancasila Kelas 6</option>
                                    <option>Bahasa Indonesia Kelas 1</option>
                                    <option>Bahasa Indonesia Kelas 2</option>
                                    <option>Bahasa Indonesia Kelas 3</option>
                                    <option>Bahasa Indonesia Kelas 4</option>
                                    <option>Bahasa Indonesia Kelas 5</option>
                                    <option>Bahasa Indonesia Kelas 6</option>
                                    <option>Matematika Kelas 1</option>
                                    <option>Matematika Kelas 2</option>
                                    <option>Matematika Kelas 3</option>
                                    <option>Matematika Kelas 4</option>
                                    <option>Matematika Kelas 5</option>
                                    <option>Matematika Kelas 6</option>
                                    <option>Ilmu Pengetahuan Alam dan Sosial Kelas 1</option>
                                    <option>Ilmu Pengetahuan Alam dan Sosial Kelas 2</option>
                                    <option>Ilmu Pengetahuan Alam dan Sosial Kelas 3</option>
                                    <option>Ilmu Pengetahuan Alam dan Sosial Kelas 4</option>
                                    <option>Ilmu Pengetahuan Alam dan Sosial Kelas 5</option>
                                    <option>Ilmu Pengetahuan Alam dan Sosial Kelas 6</option>
                                    <option>Pendidikan Jasmani Olahraga dan Kesehatan Kelas 1</option>
                                    <option>Pendidikan Jasmani Olahraga dan Kesehatan Kelas 2</option>
                                    <option>Pendidikan Jasmani Olahraga dan Kesehatan Kelas 3</option>
                                    <option>Pendidikan Jasmani Olahraga dan Kesehatan Kelas 4</option>
                                    <option>Pendidikan Jasmani Olahraga dan Kesehatan Kelas 5</option>
                                    <option>Pendidikan Jasmani Olahraga dan Kesehatan Kelas 6</option>
                                    <option>Seni Musik Kelas 1</option>
                                    <option>Seni Musik Kelas 2</option>
                                    <option>Seni Musik Kelas 3</option>
                                    <option>Seni Musik Kelas 4</option>
                                    <option>Seni Musik Kelas 5</option>
                                    <option>Seni Musik Kelas 6</option>
                                    <option>Seni Teater Kelas 1</option>
                                    <option>Seni Teater Kelas 2</option>
                                    <option>Seni Teater Kelas 3</option>
                                    <option>Seni Teater Kelas 4</option>
                                    <option>Seni Teater Kelas 5</option>
                                    <option>Seni Teater Kelas 6</option>
                                    <option>Seni Tari Kelas 1</option>
                                    <option>Seni Tari Kelas 2</option>
                                    <option>Seni Tari Kelas 3</option>
                                    <option>Seni Tari Kelas 4</option>
                                    <option>Seni Tari Kelas 5</option>
                                    <option>Seni Tari Kelas 6</option>
                                    <option>Seni Rupa Kelas 1</option>
                                    <option>Seni Rupa Kelas 2</option>
                                    <option>Seni Rupa Kelas 3</option>
                                    <option>Seni Rupa Kelas 4</option>
                                    <option>Seni Rupa Kelas 5</option>
                                    <option>Seni Rupa Kelas 6</option>
                                    <option>Bahasa Inggris Kelas 1</option>
                                    <option>Bahasa Inggris Kelas 2</option>
                                    <option>Bahasa Inggris Kelas 3</option>
                                    <option>Bahasa Inggris Kelas 4</option>
                                    <option>Bahasa Inggris Kelas 5</option>
                                    <option>Bahasa Inggris Kelas 6</option>
                                    <option>Bahasa Jawa Kelas 1</option>
                                    <option>Bahasa Jawa Kelas 2</option>
                                    <option>Bahasa Jawa Kelas 3</option>
                                    <option>Bahasa Jawa Kelas 4</option>
                                    <option>Bahasa Jawa Kelas 5</option>
                                    <option>Bahasa Jawa Kelas 6</option>
                                </select>
                            </div>
                            <div class="col-md-2 mt-auto mb-auto">
                                <div class="d-flex flex-wrap text-center">
                                    <div class="col-12">
                                        <a data-toggle="modal">
                                            <i class="ri-arrow-right-circle-line" style="font-size: 48px;" data-toggle="tooltip" title="Select"></i>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a data-toggle="modal">
                                            <i class="ri-arrow-left-circle-line" style="font-size: 48px;" data-toggle="tooltip" title="Unselect"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <select multiple class="form-control" id="selected_mapel" size="10">
                                </select>
                            </div>
                            <div class="d-flex justify-content-end mb-3 mt- pt-5">
                                <button class="btn text-light mx-1" style="min-width: 6rem; background-color: #845EF7; border-radius: 8px" type="submit">Simpan</button>
                            </div>
                        </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endsection(); ?>                    