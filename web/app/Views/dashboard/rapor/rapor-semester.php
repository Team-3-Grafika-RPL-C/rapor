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
    <?php foreach ($data->kelas_siswa as $dat) {?>
    <div class="col-md-4">
        <div class="card bg-indigo shadow mb-4 mt-3" data-href="<?= base_url(); ?>/rapor-semester/form/<?=$dat->id_class?>">
            <div class="card-body">
                <h2 class="h2 ">
                    Kelas <?=$dat->class_name?>
                </h2>
                <p class="p ">
                    Jumlah Siswa <?=$dat->student_count?></p>
            </div>
        </div>
    </div>
    <?php
    } ?>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endsection(); ?>                    