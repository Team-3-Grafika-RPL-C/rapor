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
    getMapel();
    getSiswa();
})

$('.btn-input').click(() => {
    getSiswa();
})

$('#mapel').change(() => {
    $('#mata-pelajaran').val($('#mapel option:selected').text());
    $('#id_subject').val($('#mapel option:selected').val());
    getSiswa();
})

$('#siswa').change(() => {
    $('#id_class_students').val($('#siswa option:selected').val());
    
})

getMapel();
function getMapel() {
    $.ajax({
        url: BASE_URL+"/nm-option-mapel",
        method: "post",
        data: {
            id_class: $('#kelas').val() ,
        },
        success: (result) => {
            result = JSON.parse(result);

            $('#mapel').empty();

            $.each(result.data_mapel, (index, value) => {
                $('#mapel').append(`
                    <option value="${value.id_subject}">${value.subject_name}</option>
                `)

                index == (result.data_mapel.length - 1) && $('#mata-pelajaran').val($('#mapel option:selected').text());
                index == (result.data_mapel.length - 1) && $('#id_subject').val($('#mapel option:selected').val());
            })
            

        },
        error: (err) => {console.log(err);}
    })
}

function getSiswa() {
    $.ajax({
        url: BASE_URL+"/nm-option-siswa",
        method: "post",
        data: {
            id_class: $('#kelas').val() ,
        },
        success: (result) => {
            result = JSON.parse(result);
            $('#siswa').empty();

            $.each(result.data_siswa, (index, value) => {
                $('#siswa').append(`
                    <option value="${value.id}">${value.student_name}</option>
                `)

                index == (result.data_siswa.length - 1) && $('#id_class_students').val($('#siswa option:selected').val());

            })
        },
        error: (err) => {console.log(err);}
    })
}

function retrieveDataSiswa(){
    $.ajax({
        url: BASE_URL+"/nilai-mapel",
        method: "post",
        data: {
            id_class: $('#kelas').val() ,
            id_academic_year: $('#tahun').val() ,
            id_subjects: $('#mapel').val() ,
        },
        success: (result) => {
            result = JSON.parse(result);
            $('#dataTable').DataTable().clear();
            $('#dataTable').DataTable().destroy();
            $('#tbody-table').empty();
            $('#modal-root').empty();

            $.each(result.data_nilai, (index, value) => {
                $('#tbody-table').append(`
                    <tr class="text-center">
                        <td>${(index+1)}</td>
                        <td>${value.student_name}</td>
                        <td>${value.score}</td>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-warning btn-rounded my-1 btn-edit" data-toggle="modal" data-target="#modaledit_${value.id_score}">
                            <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </button>
                            <a href="${BASE_URL}/input-nilai-mapel/delete/${value.id_score}"class="btn btn-danger btn-rounded">
                                <i class="ri-delete-bin-7-fill" title="Delete"></i>
                            </a>
                            
                        </td>
                    </tr>
                `)

                $('#modal-root').append(`
                    <div class="modal fade" id="modaledit_${value.id_score}" tabindex="-1" aria-labelledby="modalcatatanLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="modalcatatanLabel">Edit Nilai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <form action="input-nilai-mapel/form-edit/${value.id_score}" method="post">
                                    <div class="modal-body">
                                        <input type="hidden" id="id_subject_edit" name="id_subject_edit" value="${value.id_subjects}">
                                        <input type="hidden" id="id_class_students_edit" name="id_class_students_edit" value="${value.id}">
                                        <label for="message-text" class="col-form-label">Nama Siswa:</label>
                                        <input type="text" autocomplete="off" class="form-control" id="nama-siswa" name="nama-siswa" value="${value.student_name}" readonly>
                                        <label for="message-text" class="col-form-label">Mapel:</label>
                                        <input type="text" autocomplete="off" class="form-control" id="mata-pelajaran-edit" name="mata-pelajaran" value="${value.subject_name}" readonly>
                                        <label for="message-text" class="col-form-label">Capaian Pembelajaran:</label>
                                        <textarea autocomplete="off" class="form-control" id="cp_detail" name="cp_detail" rows="3">${value.learning_outcomes}</textarea>
                                        <label for="message-text" class="col-form-label">Tujuan Pembelajaran:</label>
                                        <textarea autocomplete="off" class="form-control" id="tp_detail" name="tp_detail" rows="3">${value.learning_purpose}</textarea>
                                        <label for="message-text" class="col-form-label">Nilai:</label>
                                        <input type="text" autocomplete="off" class="form-control" id="nilai_detail" name="nilai_detail" value="${value.score}">
    
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-indigo">Simpan</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>  
                    </div>
                `)

            })

            $('#dataTable').DataTable();
        },
        error: (err) => {console.log(err);}
    })

    $('#input_mapel').val($('#mapel').val())
    $('#input_kelas').val($('#kelas').val())
    $('#input_tahun').val($('#tahun').val())
}