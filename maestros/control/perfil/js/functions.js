$(function() {
  $("#modificar").click(function(e) {
    e.preventDefault();
    var imagen    = $("#imagen").val();


var dataString = 'imagen='+ imagen;

if(imagen === '')
{
  setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
  return false;
}
else
{
      $("#flash").show();
      $("#flash").fadeIn(400);
      $.ajax({
        type: "POST",
        url: "php/recibir.php",
        data: dataString,
        cache: true,
        success: function(html){

          setTimeout($('.mensajesCorrecto').fadeIn(1000).fadeOut(10000), 1000);

        }
      });
}

  });
});
