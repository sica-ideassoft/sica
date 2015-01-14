$(function() {
  var expr      = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
  var numeros   = /^[0-9]+$/;
  var Ecurp     = /[a-zA-Z]{4,4}[0-9]{6}[a-zA-Z]{6,6}[0-9]{2}/;
  var Etelefono = /^[0-9-()+]{3,20}/;

  $("#enviar").click(function(e) {
    e.preventDefault();

    var modulo        = $("#modulo").val();
    var sep           = $("#sep").val();
    var nombre        = $("#nombre").val();
    var profesor      = $("#profesor").val();
    var fecha1        = $("#fecha1").val();
    var fecha2        = $("#fecha2").val();
    var creditos      = $("#creditos").val();
    var calificacion  = $("#calificacion").val();


var dataString ='modulo='+ modulo +'&sep='+ sep + '&nombre='+ nombre + '&profesor='+ profesor  + '&fecha1='+ fecha1  + '&fecha2='+ fecha2  + '&creditos='+ creditos  + '&calificacion='+ calificacion ;

if(modulo === '' ||sep === '' ||nombre === '' || profesor === "" || fecha1 === "" || fecha2 === "" || creditos === "" || calificacion === "")
{
  setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
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

          document.getElementById('modulo').value='';
          document.getElementById('sep').value='';
          document.getElementById('nombre').value='';
          document.getElementById('profesor').value='';
          document.getElementById('fecha1').value='';
          document.getElementById('fecha2').value='';
          document.getElementById('creditos').value='';
          document.getElementById('calificacion').value='';

          $("#flash").hide();
          $("#modulo,#sep,#nombre,#profesor,#fecha1,#fecha2,#creditos,#calificacion").focus();


        }
      });
}

  });
});
