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

    $('.lokationForm').submit(function(event){
        var lokationForm = $(".lokationForm");
        var postNrVal = $('#postnr').val();

        var valgstedResultat = $('.valgstedResultat');

        event.preventDefault();


        $.get( "valgsteder/hentValgsteder.php", {postNr: postNrVal}, function( data ) {
            $( ".valgstedResultat" ).html( data );
        });
    });
});