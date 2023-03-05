const BASE_URL = $('#base_url').val();

$('.tampilkan-btn').click(() => {
    retrieveDataSiswa();
    
    if($('.none').hasClass('d-none')){
        $('.none').removeClass('d-none')
    }else{
        $('.none').addClass('d-none')
    }
})

$('#kelas, #mapel').change(() => {
    retrieveDataSiswa();
})

function retrieveDataSiswa(){
    $.ajax({
        url: BASE_URL+"/nilai-mapel",
        method: "post",
        data: {
            id_subject: $('#mapel').val(),
            id_class: $('#kelas').val() 
        },
        success: (result) => {
            console.log(result);
            result = JSON.parse(result);
            $('#dataTable').DataTable().clear();
            $('#dataTable').DataTable().destroy();
            $('#tbody-table').empty();

            $.each(result.data_nilai, (index, value) => {
                $('#tbody-table').append(`
                    <tr class="text-center">
                        <td>${(index+1)}</td>
                        <td>${value.student_name}</td>
                        <td>${value.score}</td>
                        </td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>/input-nilai-mapel/form-detail" class="btn btn-info btn-rounded">
                                <i class="ri-information-fill" title="Detail"></i>
                            </a>
                            <a href="" class="btn btn-warning btn-rounded">
                                <i class="ri-pencil-fill" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded">
                                <i class="ri-delete-bin-7-fill" title="Delete"></i>
                            </a>
                            <button type="button" class="btn btn-success btn-rounded my-1"  data-toggle="modal" data-target="#modalinput">
                                <i class="ri-add-fill" data-toggle="tooltip" title="Edit"></i>
                            </button>
                        </td>
                    </tr>
                `)
            })

            $('#dataTable').DataTable();
        },
        error: (err) => {console.log(err);}
    })

    $('#input_mapel').val($('#mapel').val())
    $('#input_kelas').val($('#kelas').val())
}