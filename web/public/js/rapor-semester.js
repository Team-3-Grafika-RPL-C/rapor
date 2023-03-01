const BASE_URL = $('#base_url').val();

// d-none set
$('.tampilkan-btn').click(() => {
    var id_class_student = $('#inputState').val()
    console.log(id_class_student);

    retrieveProfil(id_class_student);
    if($('.none').hasClass('d-none')){
        $('.none').removeClass('d-none')
    }else{
        $('.none').addClass('d-none')
    }
})
function retrieveProfil($id){
    $.ajax({
        url: "http://localhost/rapor/api/public/rapor-profil/"+$id,
        method: "get",
        success: (result) => {
            $('#nama-siswa').text(result.data_siswa.student_name)
            $('#nis').text(result.data_siswa.nis)
            $('#nisn').text(result.data_siswa.nisn)
            $('#kelas').text(result.data_siswa.class_name)
            $('#tahun-ajaran').text(result.data_siswa.academic_year)
        }
    })

    $.ajax({
        url: "http://localhost/rapor/api/public/rapor-nilai/"+$id,
        method: "get",
        success: (result) => {
            $('#nilai-tabel').empty()
            $.each(result.data_siswa, (index, value) => {
                $('#nilai-tabel').append(`
                <tr class="text-gray-900">
                            <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                                <font face="Arial" size="2">${index+1}</font>
                            </td>
                            <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                                <font face="Arial" size="2">${value.subject_name}</font>
                            </td>
                            <td class="td-padding" style="border: 1px solid #000; text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                                <font face="Arial" size="2">${value.score}</font>
                            </td>
                            <td class="td-border td-padding" style="text-align:left; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                                <font face="Arial" size="2">${value.learning_outcomes}</font>
                            </td>
                        </tr>
                `)
            })
        }
    })

    $.ajax({
        url: "http://localhost/rapor/api/public/rapor-nilai-ekskul/"+$id,
        method: "get",
        success: (result) => {
            $('#nilai-ekskul-tabel').empty()
            $.each(result.data_siswa, (index, value) => {
                $('#nilai-ekskul-tabel').append(`
                <tr class="text-gray-900">
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">${index+1}</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">${value.extracurricular_name}</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:center; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">${value.predicate}</font>
                        </td>
                        <td class="td-border td-padding" style="text-align:left; vertical-align:middle; margin-top:3; margin-bottom:3; margin-left:3; margin-right:3;">
                            <font face="Arial" size="2">${value.description}</font>
                        </td>
                    </tr>    
                `)
            })
        }
    })

    $.ajax({
        url: "http://localhost/rapor/api/public/rapor-catatan/"+$id,
        method: "get",
        success: (result) => {
            $('#saran').text(result.data_siswa[0].notes)
            
        }
    })

    $.ajax({
        url: "http://localhost/rapor/api/public/rapor-presensi/"+$id,
        method: "get",
        success: (result) => {
            console.log(result);
            $('#sakit').text(result.data_siswa[0].number_of_sick + " Hari")
            $('#izin').text(result.data_siswa[0].number_of_permit + " Hari")
            $('#alpha').text(result.data_siswa[0].number_of_absents + " Hari")
            
        }
    })
    
}