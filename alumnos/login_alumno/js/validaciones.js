$(document).on("ready",inicio);
function inicio(){

	$("#username").on("click",Muser);
	$("#password").on("click",Mpass);

}
function Muser(){

 setTimeout($('.Muser').fadeIn(1000).fadeOut(10000), 1000);
}
function Mpass(){

 setTimeout($('.Mpass').fadeIn(1000).fadeOut(10000), 1000);
}

