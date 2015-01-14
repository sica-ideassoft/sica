        var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        var numeros = /^[0-9]+$/;
        var Ecurp = /[a-zA-Z]{4,4}[0-9]{6}[a-zA-Z]{6,6}[0-9]{2}/;
        var Etelefono = /^[0-9-()+]{3,20}/;
        $(document).ready(function(){

            $("#altas").click(function(){
            var nombre = $("#nombre").val();
            var paterno = $("#paterno").val();
            var materno = $("#materno").val();
            var matricula = $("#matricula").val();
            var curp = $("#curp").val();
            var telefono = $("#telefono").val();
            var correo = $("#correo").val();
            var genero = $("#genero").val();
            var nacimiento = $("#nacimiento").val();
            var edad = $("#edad").val();
            var grado = $("#grado").val();
            var grupo = $("#grupo").val();
            var estado = $("#estado").val();
            var municipio = $("#municipio").val();
            var calle = $("#calle").val();
            var nacionalidad = $("#nacionalidad").val();
            var civil = $("#civil").val();
            var foto = $("#foto").val();
            var status = $("#status").val();


if(nombre === "")
{
setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
return false;
}
    else{
        if(paterno === ""){
           setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
            return false;
        }
        else{
           if(matricula === "") {
     setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
            return false;
            }
            else{
                if(curp === "") {
                setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
                return false;
                 }
                else if(!Ecurp.test(curp)) {
                setTimeout($('.mensajesCurp').fadeIn(1000).fadeOut(10000), 1000);
                return false;
                }else{
                 if(telefono === "") {
                 setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
                 return false;
                 }
                 else if(!Etelefono.test(telefono)) {
                 setTimeout($('.mensajesTelefono').fadeIn(1000).fadeOut(10000), 1000);
                 return false;
                }
                 if(correo === "") {
                 setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
                  return false;
              }
                else if(!expr.test(correo)) {
                setTimeout($('.mensajesEmail').fadeIn(1000).fadeOut(10000), 1000);
                return false;
              }

                if(genero === "") {
                 setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
                  return false;
                }

                  if(nacimiento === "") {
                 setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
                  return false;
                }
                  if(edad === "") {
                 setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
                  return false;
                }
                  if(grado === "") {
                 setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
                  return false;
                }
                  if(grupo === "") {
                 setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
                  return false;
                }
                   if(estado === "") {
                 setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
                  return false;
                }
                   if(municipio === "") {
                 setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
                  return false;
                }
                   if(calle === "") {
                 setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
                  return false;
                }
                   if(nacionalidad === "") {
                 setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
                  return false;
                }
                   if(civil === "") {
                 setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
                  return false;
                }
                   if(foto === "") {
                 setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
                  return false;
                }
                   if(status === "") {
                 setTimeout($('.mensajes').fadeIn(1000).fadeOut(10000), 1000);
                  return false;
                }










            }
}
    }

}
    });//click
});//ready

