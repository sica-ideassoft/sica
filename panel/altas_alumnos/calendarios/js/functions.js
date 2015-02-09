$(function() {
  var expr      = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
  var numeros   = /^[0-9]+$/;
  var Ecurp     = /[a-zA-Z]{4,4}[0-9]{6}[a-zA-Z]{6,6}[0-9]{2}/;
  var Etelefono = /^[0-9-()+]{3,20}/;


  $("#agregar").click(function(e) {
    e.preventDefault();
    var nombre  = $("#nombre").val();
    var modulo  = $("#modulo").val();
    var fecha   = $("#fecha").val();




var dataString = 'nombre='+ nombre + '&modulo='+ modulo + '&fecha=' + fecha ;

if(nombre === '' || modulo === "" || fecha === "")
{
  setTimeout($('.mensajes').fadeIn(1000).fadeOut(4000), 1000);
  return false;
}
else
{
      $.ajax({
        type: "POST",
        url: "php/action.php",
        data: dataString,
        cache: true,

        success: function(html){

          setTimeout($('.mensajesCorrecto').fadeIn(1000).fadeOut(10000), 1000);

    $("#nombre").val("");
    $("#modulo").val("");
    $("#fecha").val("");
    location.reload();
        }, error: function () {
         alertify.alert().set('message', 'El modulo ya <b>Existe</b>').show();
        }
      });
}

  });
});
