$(document).on("ready",inicio);
function inicio(){
$("#modificar").on("click",abrir);
$(".cerrarconf,.borrarconf").on("click",cerrar);

}
function abrir(e){
	e.preventDefault()
$(".confirmacion").fadeIn();
}
function cerrar(){
$(".confirmacion").fadeOut();
}