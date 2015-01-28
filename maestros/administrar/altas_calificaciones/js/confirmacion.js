$(document).on("ready",function(){

$(".liEliminar").on("click",function(e){
	e.preventDefault();
	$(".Mconfirma").fadeIn(600);
});
$(".icoCerrar").on("click",function(){

	$(".Mconfirma").fadeOut(600);
});

$(".cancelarBtn").on("click",function(){

	$(".Mconfirma").fadeOut(600);
});
});