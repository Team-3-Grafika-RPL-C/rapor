// d-none set
$('.tampilkan-btn').click(() => {
    if($('.card').hasClass('d-none')){
        $('.card').removeClass('d-none')
    }else{
        $('.card').addClass('d-none')
    }
})
