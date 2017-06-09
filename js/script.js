$('#menuKnap').click(function(){
    $('.responsivMenu').toggleClass('aabn');
    $('.indhold').toggleClass('menuAabn');
    $('#menuKnap').toggleClass('menuKnapAabn');
});

$(".findValgsted").click(function() {
    $('.stemmeLokation').slideDown(2000);
    $('html, body').animate({
        scrollTop: $(".stemmeLokation").offset().top - 150
    }, 2000);
});

$(document).ready(function() {
    $.validate({
        lang : 'dk'
    });
});