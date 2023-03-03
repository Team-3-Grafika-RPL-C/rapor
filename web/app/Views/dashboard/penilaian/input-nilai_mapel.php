<?= $this->extend('templates/admin-template.php'); ?>

<?= $this->section('conten'); ?>
<!-- DataTales Example -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-900 font-weight-bold">Input Nilai Mata Pelajaran</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-indigo-900">Tabel Nilai Siswa</h4>
        </div>
        <div class="mx-3">
            <div class="container">
                <form action="" method="post">
                    <div class="row mt-4">
                        <div class="col-md-4 mb-4">
                            <h6 class="h6 text-gray-900 font-weight-bold">Kelas</h6>
                        </div>
                        <div class="col-md-8 mb-4">
                            <div>
                                <select class="custom-select my-1 mr-sm-2" id="kelas">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <h6 class="h6 text-gray-900 font-weight-bold">Mata Pelajaran</h6>
                        </div>
                        <div class="col-md-8 mb-4">
                            <div>
                                <select class="custom-select my-1 mr-sm-2" id="mapel">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end text-right">
                        <div class="col mb-4">
                            <a class="btn d-sm-inline-block text-light btn-sm shadow px-4 tampilkan-btn" href="#!" style="min-width: 5rem; background-color: #845EF7; border-radius: 8px">
                                <span class="d-flex">Tampilkan</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body d-none">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            </table>
                        </div>
                    </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <script src="<?= base_url(); ?>/js/input-nilai_mapel.js"></script>
    <script>
        <?= "const data = " . json_encode($data->data) . ";\n"; ?>
        let kelas = document.getElementById("kelas");
        let mapel = document.getElementById("mapel");
        let table = document.getElementById("datTable")
        for (const dat of Object.keys(data)) {
            let option = document.createElement("option");
            option.text = dat;
            option.value = dat;
            kelas.add(option);
        }

        mapel.innerHTML = "";
        console.log(data[kelas.value]);
        for (const dat of Object.keys(data[kelas.value])) {
            let option = document.createElement("option");
            option.text = dat;
            option.value = dat;
            mapel.add(option);
        }


        const tableHead = `
            <div class="row justify-content-end text-right">
                <div class="col mb-4">
                    <a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="<?= base_url(); ?>/input-nilai-mapel/form" style="min-width: 5rem; background-color: #845EF7; border-radius: 16px">
                        <span class="d-flex">
                            <i class="ri-add-line mt-auto mb-auto mr-1" style="font-size: 14px;"></i>
                            Input
                        </span>
                    </a>
                </div>
            </div>
            <thead>
                <tr>
                    <th class="text-center"></th>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Nilai</th>
                    <th class="text-center">ACTION</th>
                </tr>
            </thead>`;

        function changeTableList() {
            tableData = tableHead
            let i = 1;
            for (const dat of Object.keys(data[kelas.value][mapel.value])) {
                tableTemp =
                    `
                    
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="` + dat['id'] + `-checked">
                            </div>
                        </td>
                        <td>` + i + `</td>
                        <td>` + dat['student_name'] + `</td>
                        <td>` + dat['score'] + `</td>
                        </td>
                        <td class="text-center">
                            <a href="" class="btn btn-info btn-rounded">
                                <i class="ri-information-fill" title="Detail"></i>
                            </a>
                            <a href="" class="btn btn-warning btn-rounded">
                                <i class="ri-pencil-fill" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded">
                                <i class="ri-delete-bin-7-fill" title="Delete"></i>
                            </a>
                        </td>
                    </tr>
                `;
                tableData = tableData + tableTemp;
                i++;
            }
            table.innerHTML = tableData;
        }

        document.getElementById("kelas").addEventListener("change", function() {
            mapel.innerHTML = "";
            for (const dat of Object.keys(data)) {
                let option = document.createElement("option");
                option.text = dat;
                option.value = dat;
                kelas.add(option);
            }
        });

        document.getElementById("mapel").addEventListener("change", function() {
            mapel.innerHTML = "";
            for (const dat of Object.keys(data[kelas.value])) {
                let option = document.createElement("option");
                option.text = dat;
                option.value = dat;
                mapel.add(option);
            }
        });

        $('.tampilkan-btn').click(() => {
            if ($('.card-body').hasClass('d-none')) {
                $('.card-body').removeClass('d-none')
            } else {
                $('.card-body').addClass('d-none')
            }
        });s
    </script>

    <!-- End of Main Content -->
    <?= $this->endsection(); ?>