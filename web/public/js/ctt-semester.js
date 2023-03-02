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
        headers: {
            Authorization: "Bearer 12h21kkn2huygttyt76t76fytfyfyffhghfgvgvgg"
        },
        method: "post",
        data: {
            id_academic_year: $('#tahun').val(),
            id_class: $('#kelas').val() 
        },
        contentType:"application/json",
        dataType:"json",
        success: (result) => {
            console.log(result);
            $('#dataTable').DataTable().clear();
            $('#dataTable').DataTable().destroy();
            $('#tbody-table').empty();

            $.each(result.data_siswa, (index, value) => {
                $('#tbody-table').append(`
                    <tr>
                        <td>${(index+1)}</td>
                        <td>${value.nis}</td>
                        <td>${value.student_name}</td>
                        <td>${value.notes}</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-rounded my-1"  data-toggle="modal" data-target="#modalcatatan">
                                <i class="ri-pencil-fill" data-toggle="tooltip" title="Edit"></i>
                            </button>
                        </td>
                    </tr>
                `)
                })

            $('#dataTable').DataTable();
        },
        error: (err) => {console.log(err);}
    })

    $('#input_tahun').val($('#tahun').val())
    $('#input_kelas').val($('#kelas').val())
}