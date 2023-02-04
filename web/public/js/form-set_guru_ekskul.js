$('.tampilkan-btn').click(() => {
    if($('.add-ekskul-container').hasClass('d-none')){
        $('.add-ekskul-container').removeClass('d-none')
    }else{
        $('.add-ekskul-container').addClass('d-none')
    }
})

$('.add-ekskul-btn').click(() => {
    let mapel = $('#ekskul').find(':selected');
    $.each(mapel, (index, value) => {
        $('#selected_ekskul').append(`<option>${value.innerHTML}</option>`);
        $(value).remove();
    })
})

$('.remove-ekskul-btn').click(() => {
    let mapel = $('#selected_ekskul').find(':selected');
    $.each(mapel, (index, value) => {
        $('#ekskul').append(`<option>${value.innerHTML}</option>`);
        $(value).remove();
    })
})