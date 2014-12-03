var contador = 1;
$(document).on("ready",function(){
	$("#respon").on("click",menu);

});
function menu(){
if(contador == 1){
	$('.menu2').animate({
		left: '-200px',

	}, {"queue": false, "duration": 800});

	contador = 0;
} else {
	contador = 1;
	$('.menu2').animate({
		left: '0px'
	}, {"queue": false, "duration": 800});
}


}