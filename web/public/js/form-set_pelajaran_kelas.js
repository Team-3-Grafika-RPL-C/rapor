$('.tampilkan-btn').click(() => {
    if($('.add-mapel-container').hasClass('d-none')){
        $('.add-mapel-container').removeClass('d-none')
    }else{
        $('.add-mapel-container').addClass('d-none')
    }
})

$('.add-mapel-btn').click(() => {
    let mapel = $('#mapel').find(':selected');
    $.each(mapel, (index, value) => {
        $('#selected_mapel').append(`<option>${value.innerHTML}</option>`);
        $(value).remove();
    })
})

$('.remove-mapel-btn').click(() => {
    let mapel = $('#selected_mapel').find(':selected');
    $.each(mapel, (index, value) => {
        $('#mapel').append(`<option>${value.innerHTML}</option>`);
        $(value).remove();
    })
})