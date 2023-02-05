<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card">
        <div class="card-body container d-flex flex-column justify-content-end text-center">
            <div class="my-4">
                <img src="<?= base_url(); ?>/assets/logo-polowijen.png" class="my-3" alt="Logo SDN Polowijen 1 Malang"  height="140rem">
                <p class="h1 font-weight-bold text-gray-900 my-2">SD NEGERI 1 POLOWIJEN</h1>
             </div>
            <div class="my-4">
                <h2 class="h2 font-weight-bold text-gray-900">VISI</h2>
                <p class="p text-gray-900">Unggul Dalam Prestasi, Berkarakter, Selaras Iman dan Taqwa, Berwawasan Lingkungan, dan Ramah Anak</p>
            </div>
            <div class="my-4">
                <h2 class="h2 font-weight-bold text-gray-900">MISI</h2>
                <p class="p text-gray-900">Mewujudkan peningkatan prestasi siswa dalam bidang akademik.
                    <br>Mewujudkan peningkatan prestasi siswa dalam bidang non akademik.
                    <br>Membudayakan perilaku agamis dalam berbagai aspek kehidupan di sekolah.</p>
            </div>
            <div class="my-4">
                <h5 class="h5 font-weight-bold text-gray-900">JL. Polowijen No 123 Kota Malang, Jawa Timur</h5>
                <h5 class="h5 font-weight-bold text-gray-900">No.Tlp (0341)8983647 | Fax 816383648</h5>
                <h5 class="h5 font-weight-bold text-gray-900">Email : sdnpolowijen1@gmail.com</h5>                
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url(); ?>/js/form-set_siswa_ekskul.js"></script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    