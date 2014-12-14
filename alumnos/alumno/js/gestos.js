$(window.matchMedias("(max-width:320px)")).matches){

var $body = document.querySelector('body');
var body  = new Hammer($body);

body.on('panleft',function(){
	$(".menu2").animate({left:"-170px"})
});
}
