$(function(){
	var pattern = /^(http|https|ftp)\:\/\/[a-z0-9\.-]+\.[a-z]{2,4}/gi;

  $("#btnEnviar").click(function(e) {
  	e.preventDefault();
  	var aviso     = $('#aviso').val();
  	var prioridad = $('#prio').val();
  	var	url       = $('#url').val();

  	var dataString = 'aviso=' + aviso + '&prioridad=' + prioridad + '&url=' + url;

  	if(aviso===""||prioridad===""||url===""){
  		setTimeout($('.mensajes').fadeIn(1000).fadeOut(4000), 1000);
	  	return false;
  	}
  	else if(!pattern.test(url))
	{
   	setTimeout($('.mensajesUrl').fadeIn(1000).fadeOut(4000), 1000);
   	return false;
	}
  	else
  	{
  		$.ajax({
  			type: 'POST',
  			 url: 'php/recibir.php',
  			 data: dataString,
        	 cache:false,
        		success: function(html){
        	setTimeout($('.mensajesCorrecto').fadeIn(1000).fadeOut(10000), 1000);
        	setTimeout(
   function(){
      //Lo que debe pasar pasados 10 segundos (10mil milisegundos)
        	document.location.reload();
   }, 3000)
        		}


  		});

  	}

  });
});