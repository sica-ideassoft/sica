
$(document).ready(function(){

    $('#more').click(function(event){
    $('.ul-submenu').animate({marginTop:'-290px'},200);
    $('#titlebox').animate({height:'280px'},200);
    $('#more').text('Aún más de SICA').animate({marginTop:'-100px'},200);
    event.stopPropagation();
    });
    $('.contuser').click(function(event){

        $('#titlebox').fadeIn('slow');
        event.stopPropagation();

    });

    $('html').click(function() {

    $('#titlebox').hide();
    $('.ul-submenu').animate({marginTop:'0'});
    $('#titlebox').animate({height:'380px'});
    $('#more').text('More').animate({marginTop:'0'});


    });

});