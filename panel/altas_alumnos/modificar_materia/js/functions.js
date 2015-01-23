$(function() {
  var expr      = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
  var numeros   = /^[0-9]+$/;
  var Ecurp     = /[a-zA-Z]{4,4}[0-9]{6}[a-zA-Z]{6,6}[0-9]{2}/;
  var Etelefono = /^[0-9-()+]{3,20}/;

  $("#enviar").click(function(e) {
    e.preventDefault();
 id
 var sep       = $("#sep").val();
 var nombre    = $("#nombre").val();
 var profesor  = $("#profesor").val();
 var calificacion = $("#calificacion").val();
 var fecha1    = $("#fecha1").val();
 var fecha2    = $("#fecha2").val();
 var creditos  = $("#creditos").val();


var dataString ='id='+ id +'&sep='+ sep  + '&nombre='+ nombre + '&profesor='+ profesor  + '&fecha1='+ fecha1  + '&fecha2='+ fecha2  + '&creditos='+ creditos  + '&calificacion='+ calificacion;

if(sep === '' ||nombre === '' || profesor === "" || fecha1 === "" || fecha2 === "" || creditos === "" || calificacion === "")
{
  setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
  return false;
}
else
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
