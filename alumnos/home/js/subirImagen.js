$(function(){

	var button = $('#upload_button'), interval;
	new AjaxUpload('#upload_button', {
		action: 'php/upload.php',
		onSubmit : function(file , ext){

			if (! (ext && /^(jpg)$/.test(ext))){
				alert('Error: Solo se permiten archivo de Imagen JPG.');

				return false;
			} else {
				this.disable();

				$("#contenedorImagen").html('<img src="img/loading.gif" />');
			}
		},
		onComplete: function(file, response){
			button.hide();
			$("#contenedorImagen").html('<p>Actualiza para poder mostrar cambios</p>');
		}
	});

});