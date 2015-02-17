$(function() {

  var expr      = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
  var numeros   = /^[0-9]+$/;
  var Ecurp     = /[a-zA-Z]{4,4}[0-9]{6}[a-zA-Z]{6,6}[0-9]{2}/;
  var Etelefono = /^[0-9-()+]{3,20}/;
  var ClaveMateria    = /^[A-Z]{1,2}\-[0-9]{2}$/;
  var valCalificacion = /^[1-9]+|\d+(?:\.\d{0,2})$/;
  var valCiclo  = /^([0-9]{4})+\-[0-9]{1}$/;


  $("#enviar").click(function(e) {
    e.preventDefault();
 id
 var sep       = $("#sep").val();
 var nombre    = $("#nombre").val();
 var calificacion = $("#calificacion").val();
 var fecha1    = $("#fecha1").val();
 var fecha2    = $("#fecha2").val();
 var creditos  = $("#creditos").val();
 var ciclo  = $("#ciclo").val();


var dataString ='id='+ id +'&sep='+ sep  + '&nombre='+ nombre  + '&fecha1='+ fecha1  + '&fecha2='+ fecha2  + '&creditos='+ creditos  + '&calificacion='+ calificacion+ '&ciclo='+ ciclo;

if(sep === '' ||nombre === ''  || fecha1 === "" || fecha2 === "" || creditos === "" || calificacion === ""|| ciclo === "")
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
else if(!valCiclo.test(ciclo))
{
  setTimeout($('.msCiclo').fadeIn(1000).fadeOut(4000), 1000);
  return false;
}else
{
alertify.confirm("Realmente quiere modificar la Materia?.",
function()
{
    // alertify.success('Ok');
      $.ajax({
        type: "POST",
        url: "php/modificado.php",
        data: dataString,
        cache: true,
        success: function(html){

          setTimeout($('.mensajesCorrecto').fadeIn(1000).fadeOut(10000), 1000);
          }
      });
},
  function()
{

});


}

  });
});
