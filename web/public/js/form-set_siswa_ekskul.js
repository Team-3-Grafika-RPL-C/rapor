const BASE_URL = $('#base_url').val();

$('.tampilkan-btn').click(() => {
    retrieveDataSiswa();

    if($('.card-body').hasClass('d-none')){
        $('.card-body').removeClass('d-none')
    }else{
        $('.card-body').addClass('d-none')
    }
})

$('#ekskul').change(() => {
    retrieveDataSiswa();
})

function retrieveDataSiswa(){
    $.ajax({
        url: "https://b751-203-78-117-207.ap.ngrok.io/data-siswa-ekskul",
        method: "post",
        data: {
            id_extracurricular: $('#ekskul').val() 
        },
        success: (result) => {
            result = JSON.parse(result);
            $('#dataTable').DataTable().clear();
            $('#dataTable').DataTable().destroy();
            $('#tbody-table').empty();

            $.each(result.data_siswa, (index, value) => {
                $('#tbody-table').append(`
                    <tr>
                        <td>${(index+1)}</td>
                        <td>${value.nis}</td>
                        <td>${value.student_name}</td>
                        <td class="text-center">
                            <a href="${BASE_URL}/set-siswa_ekskul/delete/${value.id}" class="btn btn-danger btn-rounded">
                                <i class="ri-delete-bin-7-fill" title="Delete"></i>
                            </a>
                        </td>
                    </tr>
                `)
            })

            $('#dataTable').DataTable();
        },
        error: (err) => {console.log(err);}
    })

    $('#input_ekskul').val($('#ekskul').val())
}