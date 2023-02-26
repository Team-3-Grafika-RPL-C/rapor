$('.tampilkan-btn').click(() => {
    retrieveDataSiswa();

    if($('.card-body').hasClass('d-none')){
        $('.card-body').removeClass('d-none')
    }else{
        $('.card-body').addClass('d-none')
    }
})

$('#kelas, #tahun').change(() => {
    retrieveDataSiswa();
})


function retrieveDataSiswa(){
    $.ajax({
        url: "http://localhost:8080/data-siswa-kelas",
        method: "post",
        data: {
            id_academic_year: $('#tahun').val(),
            id_class: $('#kelas').val() 
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
                `)
            })

            $('#dataTable').DataTable();
        },
        error: (err) => {console.log(err);}
    })

    $('#input_tahun').val($('#tahun').val())
    $('#input_kelas').val($('#kelas').val())
}