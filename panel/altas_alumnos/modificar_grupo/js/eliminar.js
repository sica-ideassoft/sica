function delGrupo(id){
  alertify.confirm("Realmente quiere <b>Eliminar</b> el grupo?.",
    function(){
    window.location="php/delete.php?id="+id;
    },function()
      {

      });
}
