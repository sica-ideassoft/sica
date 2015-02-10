function delModulo(id) {
  alertify.confirm("Realmente quiere <b>eliminar</b> el Modulo.",
  function(){
    var dataString = 'id=' + id;
      $.ajax({
        type: "POST",
        url: "php/delete.php",
        data: dataString,
        cache: true,
        success: function(html){
          location.reload();
        }
       });
  },
  function(){
    // alertify.error('Cancel');
  });

}
