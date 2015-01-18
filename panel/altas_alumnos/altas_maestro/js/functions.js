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
    var clavep    = $("#clavep").val();
    var curp      = $("#curp").val();
    var telefono  = $("#telefono").val();
    var correo    = $("#correo").val();
    var genero    = $("#genero").val();
    var edad      = $("#edad").val();
    var civil     = $("#civil").val();
    var nacimiento = $("#nacimiento").val();
    var estado     = $("#estado").val();
    var municipio  = $("#municipio").val();
    var calle  = $("#calle").val();
    var nacionalidad  = $("#nacionalidad").val();
    var user  = $("#user").val();
    var password  = $("#password").val();
    var foto  = $("#foto").val();



var dataString = 'nombre='+ nombre + '&paterno='+ paterno + '&materno=' + materno+'&clavep=' + clavep+ '&curp=' + curp+ '&telefono=' + telefono+ '&correo=' + correo+ '&genero=' + genero+ '&edad=' + edad+ '&civil=' + civil+ '&nacimiento=' + nacimiento+ '&estado=' + estado+ '&municipio=' + municipio+ '&calle=' + calle+ '&nacionalidad=' + nacionalidad + '&user=' + user+ '&password=' + password + '&foto=' + foto;

if(nombre === '' || paterno === "" || materno === ""|| clavep === ""|| curp === ""|| telefono === ""|| correo === ""|| genero === ""|| edad === ""|| civil === ""|| nacimiento === ""|| estado === ""|| municipio === ""|| calle === ""|| nacionalidad === ""|| user === ""|| password === ""|| foto === "")
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
      $("#flash").show();
      $("#flash").fadeIn(400);
      $.ajax({
        type: "POST",
        url: "php/action.php",
        data: dataString,
        cache: true,
        success: function(html){

          setTimeout($('.mensajesCorrecto').fadeIn(1000).fadeOut(10000), 1000);

    $("#nombre").val("");
    $("#paterno").val("");
    $("#materno").val("");
    $("#clavep").val("");
    $("#curp").val("");
    $("#telefono").val("");
    $("#correo").val("");
    $("#genero").val("");
    $("#edad").val("");
    $("#civil").val("");
    $("#nacimiento").val("");
    $("#estado").val("");
    $("#municipio").val("");
    $("#calle").val("");
    $("#nacionalidad").val("");
    $("#user").val("");
    $("#password").val("");
    $("#foto").val("");

        }, error: function () {
         alertify.alert().set('message', 'La clave del maestro ya existe').show();
        }
      });
}

  });
});

