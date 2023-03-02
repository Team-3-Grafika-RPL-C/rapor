<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<link rel="stylesheet" href="<?= base_url()?>/css/rapor.css" />

<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
<div class="card my-3 pb-4">
    <div class="card-body">
            <table style="width: 100%">
                <tbody>
                    <td style="float: right;">
                        <img src="<?= base_url(); ?>/assets/logo-polowijen.png" alt="logo sdn polowijen 1" style="width:125px">
                    </td>
                    <td>
                        <span class="text-gray-900">
                            <p style="text-align:center">
                                <span style="line-height:1">
                                    <strong>
                                        <span style="font-size:28px">
                                            <span style="font-family:tahoma,geneva,sans-serif">SDN POLOWIJEN 1 Malang</span>
                                        </span>
                                    </strong>  
                                </span>
                            </p>
                            <p style="text-align:center">
                                <span style="line-height:1">
                                    <span style="font-size:14px">Jl. Polowijen No. 123 Malang 65149</span>
                                </span>
                            </p>
                            <p style="text-align:center">
                                <span style="line-height:1">
                                    <span style="font-size:14px">Email: sdn.polowijen1mlg@yahoo.co.id</span>
                                </span>
                            </p>
                            <p style="text-align:center">
                                <span style="line-height:1">
                                    <span style="font-size:14px">Telp.(0341)598538</span>
                                </span>
                            </p>                            
                        </span>
                    </td>
                </tbody>
            </table>
            <hr class="my-2" style="border: 1px solid black; margin-top: 2px">
            <p class="text-gray-900" style="text-align:center; margin-bottom: 10px; margin-top: 5px; font-size:13px; font-weight:600;">
                <font face="Arial" size="2">LAPORAN HASIL BELAJAR SISWA</font>
            </p>
            <table style="width:100%; border-collapse: collapse;">
                <tbody>
                    <tr>
                        <td style="vertical-align:top;">
                            <table style="width:100%">
                                <tbody class="text-gray-900">
                                    <tr>
                                        <td style="width:20%; text-align:left; font-weight:600; padding-bottom:7px;" class="th-style">
                                            <font face="Arial" size="2">Nama</font>
                                        </td>
                                        <td style="width:80%; text-align:left;">
                                            <font face="Arial" size="2">:
                                                <span id="nama-siswa">-</span>
                                            </font> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%; text-align:left; font-weight:600; padding-bottom:7px;" class="th-style">
                                            <font face="Arial" size="2">NIS</font>
                                        </td>
                                        <td style="width:80%; text-align:left;">
                                            <font face="Arial" size="2">:
                                                <span id="nis">-</span>
                                            </font> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%; text-align:left; font-weight:600; padding-bottom:7px;" class="th-style">
                                            <font face="Arial" size="2">NISN</font>
                                        </td>
                                        <td style="width:80%; text-align:left;">
                                            <font face="Arial" size="2">:
                                                <span id="nisn">-</span>
                                            </font> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%; text-align:left; font-weight:600; padding-bottom:7px;" class="th-style">
                                            <font face="Arial" size="2">Kelas</font>
                                        </td>
                                        <td style="width:80%; text-align:left;">
                                            <font face="Arial" size="2">:
                                                <span id="kelas">-</span>
                                            </font> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%; text-align:left; font-weight:600; padding-bottom:7px;" class="th-style">
                                            <font face="Arial" size="2">Tahun Ajaran</font>
                                        </td>
                                        <td style="width:80%; text-align:left;">
                                            <font face="Arial" size="2">:
                                                <span id="tahun-ajaran">-</span>
                                            </font> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td style="width:3cm;">
                            <table class="table table-bordered" style="position:relative; border-collapse: collapse; margin:0; width:3cm;">
                                <tbody>
                                    <tr>
                                        <td style="width:3cm; height:4cm; text-align:center; vertical-align:middle; border-style: dotted; border:1px;" class="td-border td-padding th-style">
                                            <font face="Arial" size="1">Photo 3x4</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Intrakurikuler -->
            <h2 class="h2 judul text-gray-900" style="font-weight:600; margin-bottom:1px;">
                <font face="Arial" size="1">A. INTRAKURIKULER</font>
            </h2>
            <table class="table table-bordered" style="margin-bottom: 20px; width:100%; border-collapse: collapse;">
                <thead>
                    <tr class="text-gray-900">
                        <th class="td-border td-padding th-style" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3; width:3%;">
                            <font face="Arial" size="2">No</font>
                        </th>
                        <th class="td-border td-padding th-style" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3; width:20%;">
                            <font face="Arial" size="2">Mata Pelajaran</font>
                        </th>
                        <th class="td-border td-padding th-style" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3; width:5%;">
                            <font face="Arial" size="2">Nilai Akhir</font>
                        </th>
                        <th class="td-border td-padding th-style" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3; width:36%;">
                            <font face="Arial" size="2">Capaian Kompetensi</font>
                        </th>
                    </tr>
                </thead>
                <tbody id="nilai-tabel">
                    
                </tbody>
            </table>
            <!-- Ekstrakurikuler -->
            <h2 class="h2 judul text-gray-900" style="font-weight:600; margin-bottom:1px;">
                <font face="Arial" size="1">B. EKSTRAKURIKULER</font>
            </h2>
            <table class="table table-bordered" style="margin-bottom: 20px; width:100%; border-collapse: collapse;">
                <thead>
                    <tr class="text-gray-900">
                        <th class="td-border td-padding th-style" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3; width:3%;">
                            <font face="Arial" size="2">No</font>
                        </th>
                        <th class="td-border td-padding th-style" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3; width:20%;">
                            <font face="Arial" size="2">Ekstrakurikuler</font>
                        </th>
                        <th class="td-border td-padding th-style" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3; width:20%;">
                            <font face="Arial" size="2">Predikat</font>
                        </th>
                        <th class="td-border td-padding th-style" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3; width:36%;">
                            <font face="Arial" size="2">Keterangan</font>
                        </th>
                    </tr>
                </thead>
                <tbody id="nilai-ekskul-tabel">
                           
                </tbody>
            </table>
            <!-- Saran-Saran -->
            <h2 class="h2 judul text-gray-900" style="font-weight:600; margin-bottom:1px;">
                <font face="Arial" size="1">C. SARAN-SARAN</font>
            </h2>
            <table class="table table-bordered" style="margin-bottom: 20px; border-collapse: collapse" border="1" bordercolor="black" width="100%">
                <tbody>
                    <tr class="text-gray-900">
                        <td class="td-border td-padding th-style" style="text-align:left; vertical-align:middle; height:85px; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2" id="saran"></font>
                        </td>
                    </tr>
                </tbody>
            </table>                        

            <!-- Ketidak hadiran -->
            <h2 class="h2 judul text-gray-900" style="font-weight:600; margin-bottom:1px;">
                <font face="Arial" size="1">D. KETIDAKHADIRAN</font>
            </h2>
            <table class="table table-bordered" style="margin-bottom: 40px; width:100%; border-collapse: collapse" border="1" bordercolor="black">
                <tbody class="text-gray-900">
                    <tr>
                        <th colspan="2" class="td-border td-padding th-style" style="text-align:center; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Absensi</font>
                        </th>
                    </tr>
                    <tr>
                        <td class="td-border td-padding" style="margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Sakit</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; width:70px; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2" id="sakit">-</font>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-border td-padding" style="margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Izin</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; width:70px; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2" id="izin">-</font>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-border td-padding" style="margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Tanpa Keterangan</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; width:70px; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2" id="alpha">-</font>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- TTD -->
            <table class="text-gray-900" style="width:100%">
                <tbody>
                    <tr>
                        <th style="text-align:center; width: 33.33%;"></th>
                        <th style="text-align:center; width: 33.33%;"></th>
                        <th style="text-align:center; width: 33.33%;" class="th-style"><font face="Arial" size="2">Malang,</font></th>
                    </tr>
                    <tr>
                        <th style="text-align:center; width: 33.33%;" class="th-style"><font face="Arial" size="2">Orang Tua</font></th>
                        <th style="text-align:center; width: 33.33%;" class="th-style"><font face="Arial" size="2">Kepala Sekolah</font></th>
                        <th style="text-align:center; width: 33.33%;" class="th-style"><font face="Arial" size="2">Wali Kelas</font></th>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td style="text-align:center; height:100px; vertical-align:bottom;">_____________________________</td>
                        <td style="text-align:center; height:100px; vertical-align:bottom; font-weight:bold; text-decoration: underline">
                            <font face="Arial" size="2">Adinda Mirza Devina, S.pd</font>
                        </td>
                        <td style="text-align:center; height:100px; vertical-align:bottom;">_____________________________</td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>
</div>

<script src="<?= base_url(); ?>/js/form-set_siswa_ekskul.js"></script>
<script>
    retrieveProfil("<?= $data->id; ?>");
</script>

<!-- End of Main Content -->
<?= $this->endsection(); ?>                    