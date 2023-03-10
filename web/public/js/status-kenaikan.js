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
        url: BASE_URL+"/data-kenaikan",
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
                    <td class="col-1 my-1">${(index+1)}</td>
                    <td class="col-2 my-1">${value.nis}</td>
                    <td class="col-4 my-1">${value.student_name}</td>                                            
                    <td class="col-4 my-1">${value.is_promoted == 1 ?`Naik` :`Tidak Naik`}</td>                                            
                    <td class="col-5 my-1">
                    ${value.is_promoted == "0"
                    ?
                        `<a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="${BASE_URL}/set-naik/${value.id}" style="min-width: 5rem; background-color: #21976B; border-radius: 8px">
                        <span class="d-flex">
                            Naik
                        </span>
                        </a>`
                    :
                        `<a class="btn d-sm-inline-block text-light btn-sm shadow px-4" href="${BASE_URL}/set-tidaknaik/${value.id}" style="min-width: 5rem; background-color: #C70A0A; border-radius: 8px">
                        <span class="d-flex">
                            Tidak Naik
                        </span>
                        </a>`
                    }
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