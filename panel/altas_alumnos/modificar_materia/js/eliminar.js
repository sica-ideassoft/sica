function delMateria(id){
  alertify.confirm("Realmente quiere <b>Eliminar</b> la matería?.",
    function(){
    window.location="php/delete.php?id="+id;
    },function()
      {

      });
}
