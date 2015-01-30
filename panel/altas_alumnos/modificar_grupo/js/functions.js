$(function() {
  var expr      = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
  var numeros   = /^[0-9]+$/;
  var Ecurp     = /[a-zA-Z]{4,4}[0-9]{6}[a-zA-Z]{6,6}[0-9]{2}/;
  var Etelefono = /^[0-9-()+]{3,20}/;

  $("#enviar").click(function(e) {
    e.preventDefault();
 id
 var materia       = $("#materia").val();
 var maestro    = $("#maestro").val();
 var grado    = $("#grado").val();
 var grupo    = $("#grupo").val();



var dataString ='id='+ id +'&materia='+ materia +'&maestro='+ maestro + '&grado='+ grado+ '&grupo='+ grupo;

if(materia === '' ||maestro === '' ||grado === '' ||grupo === '')
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
           $("#show").after(html);
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
