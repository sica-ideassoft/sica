function delMateria(id){
  alertify.confirm("Realmente quiere <b>Eliminar</b> la materia?.",
    function(){
    window.location="php/delete.php?id="+id;
    },function()
      {

      });
}
