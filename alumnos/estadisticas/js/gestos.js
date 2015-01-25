var contador = 1;
$(document).on("ready",function(){
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