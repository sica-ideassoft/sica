var contador = 1;
$(document).on("ready",function(){
var $body = document.querySelector('body');
var body  = new Hammer($body);

if(window.matchMedia("(max-width:320px)").matches){
	$(".responsive").on("click",function(e){
	  e.preventDefault();
		if(contador === 1)
		{
			$(".menu2").animate({
				left:"170px"
			});
			contador++;
		}else
		{
			$(".menu2").animate({
				left:"-170px"
			});
			contador--;
		}
	});


}
});