/*Filtrar do projeto*/

$('.filter-btn').on('click', function() {
    let type = $(this).attr('id');
    let boxes = $('.projeto-box');

    $('.commun-btn').removeClass('active');
    $(this).addClass('active');

    if (type == 'btn-web') {
        caixas('web', boxes);
    } else if (type == 'btn-ambiente') {
        caixas('ambiente', boxes);
    } else if (type == 'btn-ecomerce') {
        caixas('ecomerce', boxes);
    } else if (type == 'btn-seo') {
        caixas('seo', boxes);
    } else {
        caixas('all', boxes);
    }
});

function caixas(type, boxes) {
    if (type == 'all') {
        $(boxes).fadeIn();
    } else {
        $(boxes).each(function() {
            if (!$(this).hasClass(type)) {
                $(this).fadeOut('slow');
            } else {
                $(this).fadeIn();
            }
        });
    }
}

function validarForm() {
    alert("Hi");
}