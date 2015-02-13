var $show = document.getElementById("show");
var $hide = document.getElementById("hide");
var $menu = document.getElementById("menu2");

var $body = document.querySelector("html");
// var body  = new Hammer($body);

var showMenu  = function(){

	$hide.classList.add("is-active");
	$show.classList.add("is-active");
    $menu.classList.add("is-active");

}

var hideMenu  = function(){

	$show.classList.add("is-active");
	$hide.classList.remove("is-active");
    $menu.classList.remove("is-active");

}
$show.addEventListener("click",showMenu);
$hide.addEventListener("click",hideMenu);


body.on("panright", showMenu);
body.on("panleft ", hideMenu);

