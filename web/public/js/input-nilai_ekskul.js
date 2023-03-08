const BASE_URL = $('#base_url').val();

$('.tampilkan-btn').click(() => {
    retrieveDataSiswa();

    if($('.none').hasClass('d-none')){
        $('.none').removeClass('d-none')
    }else{
        $('.none').addClass('d-none')
    }
})

$('#ekskul').change(() => {
    retrieveDataSiswa();
    getSiswa();
    $('#ekstrakurikuler').val($('#ekskul option:selected').text());
    $('#id_extracurricular').val($('#ekskul option:selected').val());
})

$('.btn-input').click(() => {
    getSiswa();
    $('#ekstrakurikuler').val($('#ekskul option:selected').text());
    $('#id_extracurricular').val($('#ekskul option:selected').val());
})

$('#siswa').change(() => {
    $('#id_class_students').val($('#siswa option:selected').val());
    
})

function getSiswa() {
    $.ajax({
        url: BASE_URL+"/ne-option-siswa",
        method: "post",
        data: {
            id_extracurricular: $('#ekskul').val() ,
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
        url: BASE_URL+"/nilai-ekskul",
        method: "post",
        data: {
            id_extracurriculars: $('#ekskul').val() ,
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
                        <td>${value.predicate}</td>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-warning btn-rounded my-1 btn-edit" data-toggle="modal" data-target="#modaledit_${value.id_score_ekskul}">
                            <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </button>
                            <a href="${BASE_URL}/input-nilai-ekskul/delete/${value.id_score_ekskul}"class="btn btn-danger btn-rounded">
                                <i class="ri-delete-bin-7-fill" title="Delete"></i>
                            </a>
                            
                        </td>
                    </tr>
                `)

                $('#modal-root').append(`
                    <div class="modal fade" id="modaledit_${value.id_score_ekskul}" tabindex="-1" aria-labelledby="modalcatatanLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="modalcatatanLabel">Edit Nilai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <form action="input-nilai-ekskul/form-edit/${value.id_score_ekskul}" method="post">
                                    <div class="modal-body">
                                        <input type="hidden" id="id_extracurricular_edit" name="id_extracurricular_edit" value="${value.id_extracurricular}">
                                        <input type="hidden" id="id_class_students_edit" name="id_class_students_edit" value="${value.id_class_students}">
                                        <label for="message-text" class="col-form-label">Nama Siswa:</label>
                                        <input type="text" autocomplete="off" class="form-control" id="nama-siswa-edit" name="nama-siswa-edit" value="${value.student_name}" readonly>
                                        <label for="message-text" class="col-form-label">Ekstrakurikuler:</label>
                                        <input type="text" autocomplete="off" class="form-control" id="ekstrakurikuler-edit" name="ekstrakurikuler-edit" value="${value.extracurricular_name}" readonly>
                                        <label for="message-text" class="col-form-label"Predikat</label>
                                        <textarea autocomplete="off" class="form-control" id="predikat-edit" name="predikat-edit" rows="3">${value.predicate}</textarea>
                                        <label for="message-text" class="col-form-label">Deskripsi:</label>
                                        <textarea autocomplete="off" class="form-control" id="desc-edit" name="desc-edit" rows="3">${value.description}</textarea>
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

    $('#input_ekskul').val($('#ekskul').val())
}