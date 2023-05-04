const BASE_URL = $('#base_url').val();

$('.tampilkan-btn').click(() => {
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
        url: BASE_URL+"/rekap-data-nilai",
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

            $.each(result.data_siswa, (index, value) => {
                $('#tbody-table').append(`
                    <tr>
                        <td>${(index+1)}</td>
                        <td>Umar bin Khattab</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
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