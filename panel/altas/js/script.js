$(document).on("ready",inicio);
function inicio(){

$(".contenido").hide();
$(".contenido:eq(1)").show();
$(".heder21 div").on("click",function (){
		$(".heder21 div").removeClass('active');

		$(".contenido").hide();
		var contenido_activo=$(this).find('a').attr("href");
		$(contenido_activo).show();

});
}