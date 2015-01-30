$(function() {

  $("#enviar").click(function(e) {
    e.preventDefault();

 var credito = $("#credito").val();
 var cal     = $("#cal").val();

 var dataString ='id='+ id +'&grupo='+ grupo +'&credito='+ credito +'&cal='+ cal;

if(credito === '' ||cal === '')
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
