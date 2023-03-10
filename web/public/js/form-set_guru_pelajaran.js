$('.tampilkan-btn').click(() => {
    if($('.add-mapel-container').hasClass('d-none')){
        $('.add-mapel-container').removeClass('d-none')
    }else{
        $('.add-mapel-container').addClass('d-none')
    }
})

$('.add-pelajaran-btn').click(() => {
    let mapel = $('#mapel_ajaran').find(':selected');
    $.each(mapel, (index, value) => {
        $('#selected_mapel_ajaran').append(`<option>${value.innerHTML}</option>`);
        $(value).remove();
    })
})

$('.remove-pelajaran-btn').click(() => {
    let mapel = $('#selected_mapel_ajaran').find(':selected');
    $.each(mapel, (index, value) => {
        $('#mapel_ajaran').append(`<option>${value.innerHTML}</option>`);
        $(value).remove();
    })
})