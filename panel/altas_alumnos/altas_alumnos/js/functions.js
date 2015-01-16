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
    var grado     = $("#grado").val();
    var grupo     = $("#grupo").val();
    var estado    = $("#estado").val();
    var municipio = $("#municipio").val();
    var calle     = $("#calle").val();
    var nacionalidad = $("#nacionalidad").val();
    var civil     = $("#civil").val();
    var imagen      = $("#imagen").val();
    var status    = $("#status").val();

var dataString = 'nombre='+ nombre + '&paterno='+ paterno + '&materno=' + materno + '&matricula=' + matricula + '&curp=' + curp + '&telefono=' + telefono + '&correo=' + correo+ '&genero=' + genero + '&nacimiento=' + nacimiento + '&edad=' + edad + '&grado=' + grado + '&grupo=' + grupo + '&estado=' + estado + '&municipio=' + municipio + '&calle=' + calle+ '&nacionalidad=' + nacionalidad + '&civil=' + civil+ '&imagen=' + imagen+ '&status=' + status;

if(nombre === '' || paterno === "" || materno === "" || matricula === "" || curp === "" || telefono === "" || correo === "" || genero === "" || nacimiento === "" || edad === "" || grado === "" || grupo === "" || estado === "" || municipio === "" || calle === "" || nacionalidad === "" || civil === "" || imagen === "" || status === "")
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
          $("#show").after(html);
          setTimeout($('.mensajesCorrecto').fadeIn(1000).fadeOut(10000), 1000);
          document.getElementById('nombre').value='';
          document.getElementById('paterno').value='';
          document.getElementById('materno').value='';
          document.getElementById('matricula').value='';
          document.getElementById('curp').value='';
          document.getElementById('telefono').value='';
          document.getElementById('correo').value='';
          document.getElementById('genero').value='';
          document.getElementById('nacimiento').value='';
          document.getElementById('edad').value='';
          document.getElementById('grado').value='';
          document.getElementById('grupo').value='';
          document.getElementById('estado').value='';
          document.getElementById('municipio').value='';
          document.getElementById('calle').value='';
          document.getElementById('nacionalidad').value='';
          document.getElementById('civil').value='';
          document.getElementById('imagen').value='';
          document.getElementById('status').value='';
          $("#flash").hide();
          $("#nombre,#paterno,#materno,#matricula,#curp,#telefono,#correo,#genero,#nacimiento,#edad,#grado,#grupo,#estado,#municipio,#calle,#nacionalidad,#civil,#foto,#status").focus();


        }
      });
}

  });
});
