$(function() {
  var expr      = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
  var numeros   = /^[0-9]+$/;
  var Ecurp     = /[a-zA-Z]{4,4}[0-9]{6}[a-zA-Z]{6,6}[0-9]{2}/;
  var Etelefono = /^[0-9-()+]{3,20}/;

  $("#enviar").click(function(e) {
    e.preventDefault();



 var nombre       = $("#nombre").val();
 var paterno      = $("#paterno").val();
 var materno      = $("#materno").val();
 var clavep       = $("#clavep").val();
 var curp         = $("#curp").val();
 var telefono     = $("#telefono").val();
 var correo       = $("#correo").val();
 var genero       = $("#genero").val();
 var edad         = $("#edad").val();
 var civil        = $("#civil").val();
 var nacimiento   = $("#nacimiento").val();
 var estado       = $("#estado").val();
 var municipio    = $("#municipio").val();
 var calle        = $("#calle").val();
 var interior     = $("#interior").val();
 var exterior     = $("#exterior").val();
 var nacionalidad = $("#nacionalidad").val();
 var user         = $("#user").val();
 var password     = $("#password").val();


var dataString ='id='+ id +'&nombre='+ nombre +'&paterno='+ paterno + '&materno='+ materno + '&clavep='+ clavep  + '&curp='+ curp  + '&telefono='+ telefono  + '&correo='+ correo  + '&genero='+ genero + '&edad='+ edad+ '&civil='+ civil+ '&nacimiento='+ nacimiento +'&estado='+ estado + '&municipio='+ municipio + '&calle='+ calle+ '&interior='+ interior+ '&exterior='+ exterior + '&nacionalidad='+ nacionalidad+ '&user='+ user+ '&password='+ password;

if(nombre === '' ||paterno === '' ||materno === '' || clavep === "" || curp === "" || telefono === "" || correo === "" || genero === ""|| edad === ""|| civil === ""|| nacionalidad === ""|| estado === ""|| municipio === ""|| calle === ""||interior === ""||exterior === ""|| nacionalidad === ""|| user === ""|| password === "")
{
  setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
  return false;
}
else if(!Ecurp.test(curp))
{
  setTimeout($('.mensajesCurp').fadeIn(1000).fadeOut(10000), 1000);
  return false;
}
else if(!Etelefono.test(telefono))
{
  setTimeout($('.mensajesTelefono').fadeIn(1000).fadeOut(10000), 1000);
  return false;
}
else if(!expr.test(correo))
{
  setTimeout($('.mensajesEmail').fadeIn(1000).fadeOut(10000), 1000);
  return false;
}
else
{
alertify.confirm("Realmente quiere modificar el Maestro?.",
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
