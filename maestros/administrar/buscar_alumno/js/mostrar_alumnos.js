$(function(){
	$(".liEliminar").on("click",function(e){
		e.preventDefault();
	})
});


function salir(variable){
  var respuesta=confirm("estas seguro");
  if(respuesta===true){
       window.location="mostrar_alumnos.php?id="+variable;
  }
  else{
    return 0 ;
  }
}
function objetoAjax(){
  var xmlhttp=false;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
    try {
       xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
      }
  }

  if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}
