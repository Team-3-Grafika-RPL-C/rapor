<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<link rel="stylesheet" href="<?= base_url()?>/css/rapor.css" />

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
<div class="card d-none">
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
                                                <span>Muhammad Sumbul</span>
                                            </font> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%; text-align:left; font-weight:600; padding-bottom:7px;" class="th-style">
                                            <font face="Arial" size="2">NIS</font>
                                        </td>
                                        <td style="width:80%; text-align:left;">
                                            <font face="Arial" size="2">:
                                                <span>004624</span>
                                            </font> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%; text-align:left; font-weight:600; padding-bottom:7px;" class="th-style">
                                            <font face="Arial" size="2">NISN</font>
                                        </td>
                                        <td style="width:80%; text-align:left;">
                                            <font face="Arial" size="2">:
                                                <span>231412502</span>
                                            </font> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%; text-align:left; font-weight:600; padding-bottom:7px;" class="th-style">
                                            <font face="Arial" size="2">Kelas</font>
                                        </td>
                                        <td style="width:80%; text-align:left;">
                                            <font face="Arial" size="2">:
                                                <span>1A</span>
                                            </font> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%; text-align:left; font-weight:600; padding-bottom:7px;" class="th-style">
                                            <font face="Arial" size="2">No absen</font>
                                        </td>
                                        <td style="width:80%; text-align:left;">
                                            <font face="Arial" size="2">:
                                                <span>05</span>
                                            </font> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%; text-align:left; font-weight:600; padding-bottom:7px;" class="th-style">
                                            <font face="Arial" size="2">Semester</font>
                                        </td>
                                        <td style="width:80%; text-align:left;">
                                            <font face="Arial" size="2">:
                                                <span>II (Genap)</span>
                                            </font> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%; text-align:left; font-weight:600; padding-bottom:7px;" class="th-style">
                                            <font face="Arial" size="2">Tahun Ajaran</font>
                                        </td>
                                        <td style="width:80%; text-align:left;">
                                            <font face="Arial" size="2">:
                                                <span>2022/2023</span>
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
                <tbody>
                    <tr class="text-gray-900">
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">1</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Pendidikan Agama dan Budi Pekerti</font>
                        </td>
                        <td class="td-padding" style="border: 1px solid #000; text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">90</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:left; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">
                                Ananda Sumbul SANGAT BAIK dalam mengenal dirinya sebagai pribadi yang dicintai Tuhan dan memahami cara menjaga dan  merawat anggota tubuh dengan baik.                                
                                Ananda Sumbul BAIK dalam mengenal anggota tubuh yang dimilikinya sebagai anugerah Allah dan menggunakannya dengan baik sesuai dengan fungsinya.
                            </font>
                        </td>
                    </tr>
                    <tr class="text-gray-900">
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">2</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Pendidikan Pancasila</font>
                        </td>
                        <td class="td-padding" style="border: 1px solid #000; text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2" style=" font-weight: 800;">69</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:left; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">
                                Ananda Sumbul CUKUP BAIK dalam mengidentifikasi aturan yang ada di sekolah dan di rumah.                                
                                Ananda Sumbul CUKUP dalam mengidentifikasi sikap mematuhi peraturan dan sikap tidak mematuhi peraturan di lingkungan keluarga dan di sekolah.
                            </font>
                        </td>
                    </tr>
                    <tr class="text-gray-900">
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">3</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Bahasa Indonesia</font>
                        </td>
                        <td class="td-padding" style="border: 1px solid #000; text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">88</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:left; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">
                                Ananda Sumbul CUKUP dalam bersikap menjadi pendengar yang penuh perhatian, membaca kata-kata yang dikenalinya sehari-hari dengan fasih, memaknai kosakata baru dari teks yang dibaca atau tayangan yang dipirsa dengan bantuan ilustrasi dan menulis kalimat sederhana.                                
                            </font>
                        </td>
                    </tr>
                    <tr class="text-gray-900">
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">4</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Matematika</font>
                        </td>
                        <td class="td-padding" style="border: 1px solid #000; text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">86</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:left; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">
                                Ananda Sumbul BAIK dalam mengidentifikasi ciri-ciri benda yang ada di sekitarnya. .
                                Ananda Sumubl CUKUP dalam mengenal dan menunjukkan anggota tubuh serta jumlahnya, mengidentifikasi fungsi dari anggota tubuhnya dan memahami cara merawat anggota tubuh dengan benar.
                            </font>
                        </td>
                    </tr>
                    <tr class="text-gray-900">
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">5</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Pendidikan Jasmani</font>
                        </td>
                        <td class="td-padding" style="border: 1px solid #000; text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">98</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:left; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">
                                Ananda Sumbul SANGAT BAIK dalam menunjukkan kemampuan dalam menirukan aktivitas pola gerak dasar.
                            </font>
                        </td>
                    </tr>
                    <tr class="text-gray-900">
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">6</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Ilmu Pengetahuan Alam dan Sosial</font>
                        </td>
                        <td class="td-padding" style="border: 1px solid #000; text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">88</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:left; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">
                                Ananda Alicia BAIK dalam mengidentifikasi ciri-ciri benda yang ada di sekitarnya.
                                Ananda Alicia CUKUP dalam mengenal dan menunjukkan anggota tubuh serta jumlahnya, mengidentifikasi fungsi dari anggota tubuhnya dan memahami cara merawat anggota tubuh dengan benar. 
                            </font>
                        </td>
                    </tr>
                    <tr class="text-gray-900">
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">7</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Seni</font>
                        </td>
                        <td class="td-padding" style="border: 1px solid #000; text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">90</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:left; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">
                                Ananda Alicia SANGAT BAIK dalam menggambar imajinasi.
                            </font>
                        </td>
                    </tr>
                    <tr class="text-gray-900">
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">8</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Bahasa Inggris</font>
                        </td>
                        <td class="td-padding" style="border: 1px solid #000; text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">70</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:left; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">
                                Ananda Alicia CUKUP BAIK dalam berinteraksi dalam situasi sosial dan kelas seperti berkenalan, memberikan informasi diri dengan kalimat sederhana.
                            </font>
                        </td>
                    </tr>
                    <tr class="text-gray-900">
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">8</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Bahasa Jawa</font>
                        </td>
                        <td class="td-padding" style="border: 1px solid #000; text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">86</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:left; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">
                            Ananda Alicia CUKUP BAIK dalam menyimak  bunyi huruf, suku kata, dan kata tentang nama- nama anggota tubuh dan kata kerja dalam ragam bahasa ngoko dan krama.
                            Ananda Alicia CUKUP BAIK dalam memahami informasi dari bacaan dan tayangan yang dibaca dan dipirsa tentang diri  sendiri  dan  lingkungan  terdekat (keluarga, sekolah  dan  masyarakat).
                            </font>
                        </td>
                    </tr>
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
                        <th class="td-border td-padding th-style" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3; width:36%;">
                            <font face="Arial" size="2">Keterangan</font>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-gray-900">
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">1</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Karate</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:left; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">
                                Ananda Sumbul SANGAT BAIK dalam menghafal tiap gerakan dasar karate.                                
                            </font>
                        </td>
                    </tr>                    
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
                            <font face="Arial" size="2">Perlu di tingkatkan prestasinya yaa</font>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <h2 class="h2 judul text-gray-900" style="font-weight:600; margin-bottom:1px;">
                <font face="Arial" size="1">E. PRESTASI</font>
            </h2>
            <table class="table table-bordered text-gray-900" style="margin-bottom: 20px; width:100%; border-collapse: collapse">
                <thead>
                    <tr>
                        <th class="td-border td-padding th-style" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3; width:3%">
                            <font face="Arial" size="2">NO</font>
                        </th>
                        <th class="td-border td-padding th-style" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3; width:25%">
                            <font face="Arial" size="2">Jenis Prestasi</font>
                        </th>
                        <th class="td-border td-padding th-style" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3; width:72%">
                            <font face="Arial" size="2">Keterangan</font>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">1</font>
                        </td>
                        <td class="td-border td-padding" style="vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Menguasai Setengah Eropa</font>
                        </td>
                        <td class="td-border td-padding" style="vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Ananda sangat hebat walau pernah ditolak di kelas seni ananda tidak gampang menyerah dan akhir nya dapat menguasai setengah dari benua Eropa.</font>
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
                            <font face="Arial" size="2">Abesensi</font>
                        </th>
                    </tr>
                    <tr>
                        <td class="td-border td-padding" style="margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Sakit</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; width:70px; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">0 hari</font>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-border td-padding" style="margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Izin</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; width:70px; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">3 hari</font>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-border td-padding" style="margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">Tanpa Keterangan</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; width:70px; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">1 hari</font>
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
                        <td style="text-align:center; height:100px; vertical-align:bottom; font-weight:bold; text-decoration: underline">
                            <font face="Arial" size="2">Eric Rafliansah, S.pd</font>
                        </td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>
<!-- <div class="iframe d-none">
    <iframe src="<?= base_url(); ?>/assets/pdf/Format Rapor Semester.pdf" frameborder="0" scrolling="auto" height="100%" width="100%" id="pdf" style="min-height: 147rem"></iframe>
</div> -->
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