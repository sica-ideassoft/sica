$(function() {
  $("#enviar").click(function() {
	var username = $("input#username").val();
	if (username === "") {
	   setTimeout($('.alertaT').fadeIn(1000).fadeOut(10000), 1000);
       return false;
    }
	var password = $("input#password").val();
	if (password === "") {
	   setTimeout($('.alertaT').fadeIn(1000).fadeOut(10000), 1000);
       return false;
    }
	var dataString = 'username='+ username + '&password=' + password;
	$.ajax({
      type: "POST",
      url: 'login.php',
      data: dataString,
	  dataType: "html",
      success: function(data) {
	  if (data == 0) {

	  setTimeout($('.validar').fadeIn(1000).fadeOut(10000), 1000);
		} else {
		document.location.href = '../altas_alumnos/home/home.php';
		}
      }
     });
    return false;
	});
});