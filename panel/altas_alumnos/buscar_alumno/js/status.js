$(function(){
var status = document.getElementById("status").innerHTML;
if(status==="activo"){
	$("#status").addClass('activoAlumno');
}
else if(status==="inactivo"){
	$("#status").addClass('inactivoAlumno');
}
else if(status==="baja temporal"){
	$("#status").addClass('bajaTemproralAlumno');
}
});


