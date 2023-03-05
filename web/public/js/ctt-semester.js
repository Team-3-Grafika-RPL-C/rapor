const BASE_URL = $('#base_url').val();
// d-none set
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
        url: BASE_URL+"/data-catatan-semester",
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
                        <td>${value.nis}</td>
                        <td>${value.student_name}</td>
                        <td>${value.notes}</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-rounded my-1"  data-toggle="modal" data-target="#modalcatatan_${value.id}">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </button>
                        </td>
                    </tr>
                `)

                $('#modal-root').append(`
                    <div class="modal fade" id="modalcatatan_${value.id}" tabindex="-1" aria-labelledby="modalcatatanLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="modalcatatanLabel">Edit Catatan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form action="catatan-semester-form/${value.id}" method="post">
                                <div class="modal-body">
                                    <label for="message-text" class="col-form-label">Catatan Wali Kelas:</label>
                                    <textarea class="form-control" id="notes" name="notes">${value.notes}</textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
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