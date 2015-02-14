$(function() {

  $("#enviar").click(function(e) {
    e.preventDefault();
 var cal     = $("#cal").val();
 var eval    = $("#eval").val();

 var dataString ='id='+ id +'&materia='+ materia +'&creditos='+ creditos +'&cal='+ cal+'&eval='+ eval+'&min_materia='+ min_materia;

if(cal === ''||eval === '')
{
  setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
  return false;
}
else{
     $.ajax({
        type: "POST",
        url: "php/action.php",
        data: dataString,
        cache: true,
        success: function(html){
          $("#show").after(html);
          setTimeout($('.mensajesCorrecto').fadeIn(1000).fadeOut(10000), 1000);
          }
      });

    }

  });
});
