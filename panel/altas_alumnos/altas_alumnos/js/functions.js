$(function() {
  $("#enviar").click(function() {
	var nombre = $("input#nombre").val();
	var paterno = $("input#paterno").val();

	var dataString = 'nombre='+ nombre + '&paterno=' + paterno;
	$.ajax({
      type: "POST",
      url: '../php/enviar.php',
      data: dataString,
	  dataType: "html",
      success: function(data) {
	  if (data == 0) {
	  setTimeout($('.validar').fadeIn(1000).fadeOut(10000), 1000);

		} else {
		document.location.href = '../altas_alumno.php';
		}
      }
     });
    return false;
	});
});