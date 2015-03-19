$(function() {
  var expr      = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
  var numeros   = /^[0-9]+$/;
  var Ecurp     = /[a-zA-Z]{4,4}[0-9]{6}[a-zA-Z]{6,6}[0-9]{2}/;
  var Etelefono = /^[0-9-()+]{3,20}/;

  $("#modificar").click(function(e) {
    e.preventDefault();
    var imagen    = $("#imagen").val();
    var usuario   = $("#usuario").val();
    var password   = $("#password").val();

var dataString = 'imagen='+ imagen + '&usuario='+ usuario + '&password=' + password;

if(imagen === '' || usuario === "" || password === "")
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
        url: "recibir.php.php",
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
