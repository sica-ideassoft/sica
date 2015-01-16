$(function() {
  var expr      = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
  var numeros   = /^[0-9]+$/;
  var Ecurp     = /[a-zA-Z]{4,4}[0-9]{6}[a-zA-Z]{6,6}[0-9]{2}/;
  var Etelefono = /^[0-9-()+]{3,20}/;

  $("#enviar").click(function(e) {
    e.preventDefault();


 id
 var nombre       = $("#nombre").val();
 var paterno      = $("#paterno").val();
 var materno      = $("#materno").val();
 var matricula    = $("#matricula").val();
 var curp         = $("#curp").val();
 var telefono     = $("#telefono").val();
 var correo       = $("#correo").val();
 var genero       = $("#genero").val();
 var nacimiento   = $("#nacimiento").val();
 var edad         = $("#edad").val();
 var grado        = $("#grado").val();
 var grupo        = $("#grupo").val();
 var estado       = $("#estado").val();
 var municipio    = $("#municipio").val();
 var calle        = $("#calle").val();
 var nacionalidad = $("#nacionalidad").val();
 var civil        = $("#civil").val();
 var foto         = $("#foto").val();
 var status       = $("#status").val();

var dataString ='id='+ id +'&nombre='+ nombre +'&paterno='+ paterno + '&materno='+ materno + '&matricula='+ matricula  + '&curp='+ curp  + '&telefono='+ telefono  + '&correo='+ correo  + '&genero='+ genero + '&nacimiento='+ nacimiento+ '&edad='+ edad + '&grado='+ grado + '&grupo='+ grupo + '&estado='+ estado + '&municipio='+ municipio + '&calle='+ calle  + '&nacionalidad='+ nacionalidad + '&civil='+ civil + '&foto='+ foto + '&status='+ status  ;

if(nombre === '' ||paterno === '' ||materno === '' || matricula === "" || curp === "" || telefono === "" || correo === "" || genero === ""|| nacimiento === ""|| edad === ""|| grado === ""|| grupo === ""|| estado === ""|| municipio === ""|| calle === ""|| nacionalidad === "" || civil === ""|| foto === ""|| status === "")
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

alertify.confirm("Realmente quiere modificar el Alumno?.",
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
