
function modAlumno(id) {
alertify.confirm("Realmente quiere eliminar el Alumno.",
  function(){
    alertify.success('Ok');
    var nombre   = $("#nombre").val();
    var paterno  = $("#paterno").val();
    var materno  = $("#materno").val();

	// var matricula    = $("#");
	// var curp         = $("#");
	// var telefono     = $("#");
	// var correo       = $("#");
	// var genero       = $("#");
	// var nacimiento   = $("#");
	// var edad         = $("#");
	// var grado        = $("#");
	// var grupo        = $("#");
	// var estado       = $("#");
	// var municipio    = $("#");
	// var calle        = $("#");
	// var nacionalidad = $("#");
	// var civil        = $("#");
	// var foto         = $("#");
	// var status       = $("#");

    window.location = "php/modificado.php?id="+id+"&nombre"+nombre;
  },
  function(){
    alertify.error('Cancel');
  });

}