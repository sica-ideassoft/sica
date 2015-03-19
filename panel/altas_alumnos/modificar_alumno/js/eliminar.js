function delAlumno(id){
  alertify.confirm("Realmente quiere modificar el Alumno?.",
    function(){
    window.location="php/delete.php?id="+id;
    },function()
      {

      });
}
