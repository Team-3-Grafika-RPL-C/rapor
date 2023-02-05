<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Rapor Semester</h1>
    </div>

<!-- DataTales Example -->
<div class="row">
    <div class="col-md-4">
        <div class="card bg-indigo shadow mb-4 mt-3" data-href="<?= base_url(); ?>/rapor-semester/form" data-href="<?= base_url(); ?>/rapor-semester/form">
            <div class="card-body">
                <h2 class="h2 ">Kelas 1A</h2>
                <p class="p ">Jumlah Siswa 80</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-indigo shadow mb-4 mt-3" data-href="<?= base_url(); ?>/rapor-semester/form">
            <div class="card-body">
                <h2 class="h2 ">Kelas 1B</h2>
                <p class="p ">Jumlah Siswa 80</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-indigo shadow mb-4 mt-3" data-href="<?= base_url(); ?>/rapor-semester/form">
            <div class="card-body">
                <h2 class="h2 ">Kelas 1C</h2>
                <p class="p ">Jumlah Siswa 80</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-indigo shadow mb-4 mt-3" data-href="<?= base_url(); ?>/rapor-semester/form">
            <div class="card-body">
                <h2 class="h2 ">Kelas 2A</h2>
                <p class="p ">Jumlah Siswa 80</p>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endsection(); ?>                    