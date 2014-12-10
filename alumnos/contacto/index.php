<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="author" content="Manuel Baronetti" />
        <title>Demo formulario de contacto</title>
        <!-- importamos hoja de estilos -->
        <link rel="stylesheet" type="text/css" href="css/estyle.css" media="screen">
        <!-- importamos fuente -->

    </head>
    <body>
        <div id="contactform">
            <!-- bloque confirmacion de envio oculto  -->
            <div id="c_information" class="hide">
                <p></p>
            </div>
            <!-- fin bloque confirmacion de envio -->

            <!-- inicio formulario -->
            <form id="c_form" name="contact">
                <div>
                  <label>
                    <p>Nombre</p>
                    <input name="nombre" id="c_name" type="text" class="c_input" placeholder="nombre..."/>
                  </label>
                  <br/>
                  <label>
                    <p>Email:</p>
                    <input name="email"  id="c_mail" type="text" class="c_input" placeholder="email..."/>
                  </label>
                </div>
                <label>
                  <p>Mensaje:</p>
                  <textarea name="mensaje"  id="c_msg" placeholder="mensaje..."></textarea>
                </label>
                <!-- boton enviar  -->
                <div id="c_btns">
                    <input name="send" onclick="cargaSendMail()" type="button" value="Enviar" class="btn-b" id="c_enviar"></input>
                </div>
            </form>
            <!-- fin formulario -->
      </div>
      <!-- Importamos libreria jQuery y nuestro script para validacion y envio-->
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="script.js"></script>
    </body>
</html>