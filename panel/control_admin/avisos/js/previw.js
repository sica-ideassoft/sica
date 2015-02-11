$(function(){
	var prioridad = document.getElementById("leyenda").innerHTML;
	if(prioridad ==="1"){
		$("#leyent").addClass('urgente');
	}else{

	}
	if(prioridad==="2"){
		$("#leyent").addClass('informativo');
	}
	if(prioridad==="3"){
		$("#leyent").addClass('recordeatorio');
	}

});