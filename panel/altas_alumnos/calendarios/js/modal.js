$(function(){
$(".mas").on("click",function(e){
	e.preventDefault();
	$(".modal-pdf").fadeIn();
});
$(".pdf-cerrar").on("click",function(){
	$(".modal-pdf").fadeOut();
});

});