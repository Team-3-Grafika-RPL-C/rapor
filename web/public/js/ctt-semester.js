// d-none set
$('.tampilkan-btn').click(() => {
    retrieveDataSiswa();

    if($('.none').hasClass('d-none')){
        $('.none').removeClass('d-none')
    }else{
        $('.none').addClass('d-none')
    }
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
                            <a href="${BASE_URL}/set-siswa_kelas/delete/${value.id}" class="btn btn-danger btn-rounded">
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