<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card">
        <div class="card-body container d-flex flex-column justify-content-end text-center">
        <iframe src="<?= base_url(); ?>/assets/pdf/Format Rapor Semester.pdf" frameborder="0" scrolling="auto" height="100%" width="100%" id="pdf" style="min-height: 147rem"></iframe>
        </div>
    </div>
</div>

<script src="<?= base_url(); ?>/js/form-set_siswa_ekskul.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    