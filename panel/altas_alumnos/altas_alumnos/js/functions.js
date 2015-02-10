$(function() {
  var expr      = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
  var numeros   = /^[0-9]+$/;
  var Ecurp     = /[a-zA-Z]{4,4}[0-9]{6}[a-zA-Z]{6,6}[0-9]{2}/;
  var Etelefono = /^[0-9-()+]{3,20}/;


  $("#enviar").click(function(e) {
    e.preventDefault();
    var nombre    = $("#nombre").val();
    var paterno   = $("#paterno").val();
    var materno   = $("#materno").val();
    var matricula = $("#matricula").val();
    var curp      = $("#curp").val();
    var telefono  = $("#telefono").val();
    var correo    = $("#correo").val();
    var genero    = $("#genero").val();
    var nacimiento = $("#nacimiento").val();
    var edad      = $("#edad").val();
    var grupo     = $("#grupo").val();
    var estado    = $("#estado").val();
    var municipio = $("#municipio").val();
    var colonia   = $("#colonia").val();
    var calle     = $("#calle").val();
    var interior     = $("#interior").val();
    var exterior     = $("#exterior").val();
    var nacionalidad = $("#nacionalidad").val();
    var civil        = $("#civil").val();

    // var status    = $("#status").val();

var dataString = 'nombre='+ nombre + '&paterno='+ paterno + '&materno=' + materno + '&matricula=' + matricula + '&curp=' + curp + '&telefono=' + telefono + '&correo=' + correo+ '&genero=' + genero + '&nacimiento=' + nacimiento + '&edad=' + edad + '&grupo='+ grupo + '&estado=' + estado + '&municipio=' + municipio+ '&colonia=' + colonia + '&calle=' + calle + '&interior=' + interior+ '&exterior=' + exterior+ '&nacionalidad=' + nacionalidad + '&civil=' + civil+ '&file=' + file;

if(nombre === '' || paterno === "" || materno === "" || matricula === "" || curp === "" || telefono === "" || correo === "" || genero === "" || nacimiento === "" || edad === "" || grupo === "" || estado === "" || municipio === "" || colonia === "" || calle === "" || interior === ""|| exterior === "" || nacionalidad === "" || civil === ""|| file === "" )
{
  setTimeout($('.mensajes').fadeIn(1000).fadeOut(4000), 1000);
  return false;
}
else if(!Ecurp.test(curp))
{
  setTimeout($('.mensajesCurp').fadeIn(1000).fadeOut(4000), 1000);
  return false;
}
else if(!Etelefono.test(telefono))
{
  setTimeout($('.mensajesTelefono').fadeIn(1000).fadeOut(4000), 1000);
  return false;
}
else if(!expr.test(correo))
{
  setTimeout($('.mensajesEmail').fadeIn(1000).fadeOut(4000), 1000);
  return false;
}
else
{
      $.ajax({
        type: "POST",
        url: "php/action.php",
        data: dataString,
        // processData:false,
        // contentType:false, //Debe estar en false para que JQuery no procese los datos a enviar
        cache:false,
        success: function(html){

          setTimeout($('.mensajesCorrecto').fadeIn(1000).fadeOut(10000), 1000);

    $("#nombre").val("");
    $("#paterno").val("");
    $("#materno").val("");
    $("#matricula").val("");
    $("#curp").val("");
    $("#telefono").val("");
    $("#correo").val("");
    $("#genero").val("");
    $("#nacimiento").val("");
    $("#edad").val("");
    $("#grupo").val("");
    $("#estado").val("");
    $("#municipio").val("");
    $("#colonia").val("");
    $("#calle").val("");
    $("#interior").val("");
    $("#exterior").val("");
    $("#nacionalidad").val("");
    $("#civil").val("");
    $("#file").val("");
    // $("#status").val("");
        }, error: function () {
         alertify.alert().set('message', 'La matricula ya <b>existe</b>').show();
        }
      });
}

  });
});
