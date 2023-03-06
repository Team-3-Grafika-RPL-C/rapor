$('.tampilkan-btn').click(() => {
    if($('.none').hasClass('d-none')){
        $('.none').removeClass('d-none')
    }else{
        $('.none').addClass('d-none')
    }
})