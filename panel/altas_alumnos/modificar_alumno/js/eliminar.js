$(function(){
	$(".liEliminar").on("click",function(e){
		e.preventDefault();
	})
});

function eliminar(variable){
  var respuesta=confirm("estas seguro");
  if(respuesta===true){
    window.location="php/eliminar.php?id="+variable;
  }
  else{
    return 0 ;
  }
}
