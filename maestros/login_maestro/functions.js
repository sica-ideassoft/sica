$(function() {
  $("#enviar").click(function() {
	var username = $("input#username").val();
	if (username == "") {
	   setTimeout($('.mensajes2').fadeIn(1000).fadeOut(4000), 100);
       return false;
    }
	var password = $("input#password").val();
	if (password == "") {
	   setTimeout($('.mensajes3').fadeIn(1000).fadeOut(4000), 100);
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

	  setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
		} else {
		document.location.href = '../administrar/home/index.php';
		}
      }
     });
    return false;
	});
});