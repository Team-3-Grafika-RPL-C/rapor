const BASE_URL = $('#base_url').val();

$('.tampilkan-btn').click(() => {
    retrieveDataSiswa();
    
    if($('.none').hasClass('d-none')){
        $('.none').removeClass('d-none')
    }else{
        $('.none').addClass('d-none')
    }
})

$('#kelas, #mapel, #tahun').change(() => {
    retrieveDataSiswa();
})

function retrieveDataSiswa(){
    $.ajax({
        url: BASE_URL+"/nilai-mapel",
        method: "post",
        data: {
            id_subject: $('#mapel').val(),
            id_class: $('#kelas').val() ,
            id_academic_year: $('#tahun').val() ,
        },
        success: (result) => {
            console.log(result);
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
                        </td>
                        <td class="text-center">
                            <a href="" class="btn btn-warning btn-rounded">
                                <i class="ri-pencil-fill" title="Edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-rounded">
                                <i class="ri-delete-bin-7-fill" title="Delete"></i>
                            </a>
                            <button type="button" class="btn btn-success btn-rounded my-1"  data-toggle="modal" data-target="#modalinput_${value.id}">
                                <i class="ri-add-fill" data-toggle="tooltip" title="Edit"></i>
                            </button>
                        </td>
                    </tr>
                `)

                $('#modal-root').append(`
                    <div class="modal fade" id="modalinput_${value.id}" tabindex="-1" aria-labelledby="modalcatatanLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="modalcatatanLabel">Input Nilai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <form action="" method="post">
                                    <div class="modal-body">
                                        <label for="message-text" class="col-form-label">Nama Siswa:</label>
                                        <input type="text" autocomplete="off" class="form-control" id="nama-siswa" name="nama-siswa" value="Taufiqi Hidayat" readonly>
                                        <label for="message-text" class="col-form-label">Mapel:</label>
                                        <input type="text" autocomplete="off" class="form-control" id="mata-pelajaran" name="mata-pelajaran" value="Pendidikan Agama dan Budi Pekerti" readonly>
                                        <label for="message-text" class="col-form-label">Capaian Pembelajaran:</label>
                                        <textarea autocomplete="off" class="form-control" id="cp" name="cp" rows="3"></textarea>
                                        <label for="message-text" class="col-form-label">Tujuan Pembelajaran:</label>
                                        <textarea autocomplete="off" class="form-control" id="tp" name="tp" rows="3"></textarea>
                                        <label for="message-text" class="col-form-label">Nilai:</label>
                                        <input type="text" autocomplete="off" class="form-control" id="nilai" name="nilai">
    
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