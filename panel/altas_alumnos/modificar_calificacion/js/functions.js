  var valCalificacion =  /^[1-9]+|\d+(?:\.\d{0,2})$/;
$(function() {

  $("#enviar").click(function(e) {
    e.preventDefault();
 var cal     = $("#cal").val();
 var eval    = $("#eval").val();


 var dataString ='id='+ id +'&materia='+ materia +'&creditos='+ creditos +'&cal='+ cal+'&eval='+ eval+'&min_materia='+ min_materia;

if(cal === ''||eval === '')
{
  setTimeout($('.mensajes').fadeIn(1000).fadeOut(4000), 1000);
  return false;
}
else if(!valCalificacion.test(cal))
{
  setTimeout($('.mensajesCalificacion').fadeIn(1000).fadeOut(4000), 1000);
  return false;
}
else
{
  alertify.confirm("Realmente quiere <b>Modificar</b> Calificación al alumno?.",
  function()
     {
     $.ajax({
        type: "POST",
        url: "php/modificado.php",
        data: dataString,
        cache: true,
        success: function(html){
          $("#show").after(html);
          setTimeout($('.mensajesCorrecto').fadeIn(1000).fadeOut(10000), 1000);
          setTimeout(window.location='./modificar_calificacion.php',3000);

          }
      });

},
  function()
{

});


}

  });
});
