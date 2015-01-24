$(function() {
  var expr      = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
  var numeros   = /^[0-9]+$/;
  var Ecurp     = /[a-zA-Z]{4,4}[0-9]{6}[a-zA-Z]{6,6}[0-9]{2}/;
  var Etelefono = /^[0-9-()+]{3,20}/;
  var ClaveMateria   = /^[A-Z]{1,2}\-[0-9]{2}$/;
  var valCalificacion =  /^[1-9]+|\d+(?:\.\d{0,2})$/;


  $("#enviar").click(function(e) {
    e.preventDefault();
    var sep           = $("#sep").val();
    var nombre        = $("#nombre").val();
    var fecha1        = $("#fecha1").val();
    var fecha2        = $("#fecha2").val();
    var creditos      = $("#creditos").val();
    var calificacion  = $("#calificacion").val();



var dataString ='sep=' + sep + '&nombre='+ nombre +'&fecha1='+ fecha1  + '&fecha2='+ fecha2  + '&creditos='+ creditos  + '&calificacion='+ calificacion ;

if(sep === '' ||nombre === ''  || fecha1 === "" || fecha2 === "" || creditos === "" || calificacion === "")
{
  setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
  return false;
}
else if(!ClaveMateria.test(sep))
{
  setTimeout($('.mensajesMateria').fadeIn(1000).fadeOut(4000), 1000);
  return false;
}
else if(!valCalificacion.test(calificacion))
{
  setTimeout($('.mensajesCalificacion').fadeIn(1000).fadeOut(4000), 1000);
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

          $("#sep").val("");
          $("#nombre").val("");
          $("#fecha1").val("");
          $("#fecha2").val("");
          $("#creditos").val("");
          $("#calificacion").val("");
          setTimeout($('.mensajesCorrecto').fadeIn(1000).fadeOut(10000), 1000);

        }, error: function () {
         alertify.alert().set('message', 'La clave del libro ya existe').show();
        }
      });
}

  });
});
