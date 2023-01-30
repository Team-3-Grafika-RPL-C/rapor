<?= $this->extend('templates/admin-template.php'); ?>
<?= $this->section('conten'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Data Guru</h1>
    </div>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Data Guru</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">NIP</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>21202020202</td>
                            <td>Dian Retno, S.Pd</td>
                            <td>Jl. Mawar No.11</td>
                            <td>Aktif</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>212020254402</td>
                            <td>Gunawan Dwiyono, S.Pd</td>
                            <td>Jl. Melati No.1</td>
                            <td>Aktif</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>212987020202</td>
                            <td>Solikin, S.Pd</td>
                            <td>Jl. Comboran No.69</td>
                            <td>Aktif</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>55203838202</td>
                            <td>Vira Alfita, M.Pd</td>
                            <td>Jl. Gadang No.11</td>
                            <td>Aktif</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>2120647602</td>
                            <td>Bagaskara, M.Pd</td>
                            <td>Jl. Mergosono No.8</td>
                            <td>Aktif</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>2126280202</td>
                            <td>Goh Cafriel Chelsea, S.Pd</td>
                            <td>Jl. Bululawang No.3</td>
                            <td>Aktif</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>21202020202</td>
                            <td>Faisal Adi, S.Pd</td>
                            <td>Jl. Kenanga No.11</td>
                            <td>Aktif</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>212020254402</td>
                            <td>Adinda Devina, S.Pd</td>
                            <td>Jl. Bareng No.9</td>
                            <td>Aktif</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>212987020202</td>
                            <td>Wayan, S.Pd</td>
                            <td>Jl. Teratai No.69</td>
                            <td>Aktif</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>55203838202</td>
                            <td>Anggraeni Tyas, M.Pd</td>
                            <td>Jl. P.Sayang No.1</td>
                            <td>Aktif</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>2120647602</td>
                            <td>Yunia, M.Pd</td>
                            <td>Jl. Kembang Sepatu No.8</td>
                            <td>Aktif</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>2126280202</td>
                            <td>Wawan, S.Pd</td>
                            <td>Jl. Songgoriti No.3</td>
                            <td>Aktif</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>2126280202</td>
                            <td>Imam, S.Pd</td>
                            <td>Jl. Halmahera No.3</td>
                            <td>Aktif</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->
<?= $this->endsection(); ?>