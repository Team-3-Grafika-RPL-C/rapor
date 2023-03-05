const BASE_URL = $('#base_url').val();
$('.tampilkan-btn').click(() => {
    retrieveDataSiswa();

    if($('.none').hasClass('d-none')){
        $('.none').removeClass('d-none')
    }else{
        $('.none').addClass('d-none')
    }
})
$('#kelas, #tahun').change(() => {
    retrieveDataSiswa();
})
function retrieveDataSiswa(){
    $.ajax({
        url: BASE_URL+"/data-presensi",
        method: "post",
        data: {
            id_academic_year: $('#tahun').val(),
            id_class: $('#kelas').val() 
        },
        success: (result) => {
            console.log(result);
            result = JSON.parse(result);
            $('#dataTable').DataTable().clear();
            $('#dataTable').DataTable().destroy();
            $('#tbody-table').empty();
            $('#modal-root').empty();

            $.each(result.data_siswa, (index, value) => {
                $('#tbody-table').append(`
                    <tr>
                        <td>${(index+1)}</td>
                        <td>${value.student_name}</td>
                        <td>${value.number_of_sick}</td>
                        <td>${value.number_of_permit}</td>
                        <td>${value.number_of_absents}</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-rounded my-1"  data-toggle="modal" data-target="#modalcatatan_${value.id}">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </button>
                        </td>
                    </tr>
                `)

                $('#modal-root').append(`
                    <div class="modal fade" id="modalcatatan_${value.id}" tabindex="-1" aria-labelledby="data-siswa-modalTitle" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="m-0 font-weight-bold text-indigo-900">Input Presensi</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form action="input-presensi-form/${value.id}" method="post">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <h6 class="h6 text-gray-900 font-weight-bold">Nama Siswa</h6>
                                    </div>
                                    <div class="col-md-8 mb-4">
                                        <input type="text" autocomplete="off" class="form-control" id="nama-siswa" name="nama-siswa" value="${value.student_name}" readonly>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <h6 class="h6 text-gray-900 font-weight-bold">Kelas</h6>
                                    </div>
                                    <div class="col-md-8 mb-4">
                                        <input type="text" autocomplete="off" class="form-control" id="kelas" name="kelas" value="${value.class_name}" readonly>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <h6 class="h6 text-gray-900 font-weight-bold">Tahun Pelajaran</h6>
                                    </div>
                                    <div class="col-md-8 mb-4">
                                        <input type="text" autocomplete="off" class="form-control" id="tahun-pelajaran" name="tahun-pelajaran" value="${value.academic_year}" readonly>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <h6 class="h text-gray-900 font-weight-bold">Sakit (Hari)</h6>
                                    </div>
                                    <div class="col-md-8 mb-4">
                                        <input type="text" autocomplete="off" class="form-control" id="sakit" name="sakit" value="${value.number_of_sick}">
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <h6 class="h6 text-gray-900 font-weight-bold">Ijin (Hari)</h6>
                                    </div>
                                    <div class="col-md-8 mb-4">
                                        <input type="text" autocomplete="off" class="form-control" id="ijin" name="ijin" value="${value.number_of_permit}">
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <h6 class="h6 text-gray-900 font-weight-bold">Alpha (Hari)</h6>
                                    </div>
                                    <div class="col-md-8 mb-4">
                                        <input type="text" autocomplete="off" class="form-control" id="alpha" name="alpha" value="${value.number_of_absents}">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </div>
                            </form>
                    </div>
                `)

                })

                $('#dataTable').DataTable();
            },
            error: (err) => {console.log(err);}
        })

    $('#input_tahun').val($('#tahun').val())
    $('#input_kelas').val($('#kelas').val())
}