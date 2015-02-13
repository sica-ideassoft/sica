$(function() {

  $("#enviar").click(function(e) {
    e.preventDefault();


 var credito = $("#credito").val();
 var cal     = $("#cal").val();
 var eval    = $("#eval").val();

 var dataString ='id='+ id +'&materia='+ materia +'&credito='+ credito +'&cal='+ cal+'&eval='+ eval;



if(credito === '' ||cal === ''||eval === '')
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
