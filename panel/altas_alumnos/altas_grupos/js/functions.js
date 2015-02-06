$(function() {
  $("#agregar").click(function(e) {
    e.preventDefault();
    var maestro  = $("#maestro").val();
    var materia  = $("#materia").val();
    var grado    = $("#grado").val();
    var grupo    = $("#grupo").val();
    var grupos = grado + grupo;


var dataString = 'maestro='+ maestro + '&materia='+ materia + '&grupos=' + grupos ;

if(maestro === '' || materia === "")
{
  setTimeout($('.mensajes').fadeIn(1000).fadeOut(4000), 1000);
  return false;
}
else
{
      $.ajax({
        type: "POST",
        url: "php/action.php",
        data: dataString,
        cache: true,

        success: function(html){

          setTimeout($('.mensajesCorrecto').fadeIn(1000).fadeOut(10000), 1000);

    $("#maestro").val("");
    $("#materia").val("");
    $("#grado").val("");
    $("#grupo").val("");

        }, error: function () {
         alertify.alert().set('message', 'El grupo ya <b>Existe</b>').show();
        }
      });
}

  });
});
