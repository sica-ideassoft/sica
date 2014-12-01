$(document).on("ready",inicio);
function inicio(){
	$("#altas").on("click",validar);
}
function validar(){
if($("input#nombre").val() === "" || $("input#paterno").val() === ""|| $("input#materno").val() === ""|| $("input#matricula").val() === ""|| $("input#curp").val() === ""|| $("input#telefono").val() === ""|| $("input#correo").val() === ""|| $("input#genero").val() === ""|| $("input#nacimiento").val() === ""|| $("input#grado").val() === ""|| $("input#grupo").val() === ""|| $("input#status").val() === ""|| $("input#estado").val() === ""|| $("input#domicilio").val() === ""|| $("input#calle").val() === ""|| $("input#nacionalidad").val() === ""|| $("input#civil").val() === ""|| $("input#foto").val() === ""){
   setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
	return false;
}
}


