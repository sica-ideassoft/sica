$(document).on("ready",function(){
$(".rosa").on("click",rosa);
$(".verde").on("click",verde);
$(".morado").on("click",morado);
$(".naranja").on("click",naranja);


});
function rosa(){
	$(".menu2").addClass("rosa");
	$(".tem,.titulo1,.color").addClass("rosa2");
	$(".titulo1").addClass("rosa3");
}
function verde(){
	$(".menu2").addClass("verde");
	$(".tem,.titulo1,.color").addClass("verde2");
	$(".titulo1").addClass("verde3");
}
function morado(){
	$(".menu2").addClass("morado");
	$(".tem,.titulo1,.color").addClass("morado2");
	$(".titulo1").addClass("morado3");
}
function naranja(){
	$(".menu2").addClass("naranja");
	$(".tem,.titulo1,.color").addClass("naranja2");
	$(".titulo1").addClass("naranja3");
}


