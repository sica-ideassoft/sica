var contador = 1;
$(document).on("ready",function(){
  	$(".modal").on("click",modal);
  	$(".cerrar").on("click",cerrar);

	$("#btnModulo").on("click",function(e){
			e.preventDefault();
		if(contador===1){
			$("#altas-modulo").slideDown(500);
			contador ++;
		}else{
			$("#altas-modulo").slideUp(500);
			contador --;
		}

	});
  function modal(e){
  	e.preventDefault();
  	$(".modulos-view").slideDown("fast");
  }
  function cerrar(e){
  	e.preventDefault();
  	$(".modulos-view").slideUp("fast");
  }
});