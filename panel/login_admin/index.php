<?php
session_start();
if (isset($_SESSION['admin-sica'])) {
    echo '<SCRIPT LANGUAGE="javascript">
    location.href = "../altas_alumnos/home/home.php";
</script>';
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="image/favicon.ico">

    <title>ADMINISTRADOR</title>

    <meta name="description" content="Sistemas de calificaciones">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/mensajes.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <header>
                <nav>
                    <div class="logo">
                        <img src="image/desarrollotecnologico.png" alt="">
                    </div>
                    <ul class="menu">
                        <li><a href="http://www.lacantera.org.mx/" ><span class="icono home"></span>HOME</a></li>
                        <li><a href="http://lacantera.org.mx/soporte/" ><span class="icono contacto"></span>CONTACTO</a></li>

                    </ul>
                </nav>
            </header>
            <section>

                <article>
                    <div class="cuerpo">
                        <div class="encabezado">
                            <p class="titulo" >ALUMNO</p>
                            <label class="sistemas">SICA</label>
                        </div>

                        <div class="alertaT">
                            <div class="alerta mensajes"></div>
                            <div class="textoM">Campos vacios no se puede Enviar la petición</div>
                        </div>

                        <div class="error mensajes"><p>Mensaje que informa al usuario sobre el error que se ha producido</p></div>
                        <div class="campos">
                            <!-- inicio de form -->

                            <form method='post'>
                                <input type="text" class="campo" id="username" name="username" placeholder="&nbsp;&nbsp;Usuario" autocomplete="off"><span class="ico1"></span> </input>
                                <br><br>
                                <input type="password" class="campo" name="password" id="password" placeholder="&nbsp;&nbsp;Contraseña" autocomplete="off"><span class="ico2"></span></input>


                                <br></br>
                                <input type="submit" name="enviar" id="enviar" class="enviar" value='ENTRAR'>
                                <div class="conent1"> <span class="icoenviar"></span></div></input><br>

                                <div class="loaderAjax" id="loaderAjax">
                                    <img src="image/loader.gif" style="display:none;">

                                </div>

                            </form>
                            <!-- fin de el form -->
                        </div>
                        <div class="Muser">
                            <span class="pico2"></span><p>Usuario</p>
                        </div>

                        <div class="Mpass">
                          <span class="pico1"></span><p>Contraseña</p>
                      </div>
                  </div>

              </article>
          </section>
          <section>
            <article>
                <div id="Merror" class="validar password">
                    <div class="imgvalidar">

                    </div>
                    <div class="Malerta" >La contraseña o usuario</br>son Incorrectos </div>

                </div>


            </article>
        </section>
        <footer>
            <div class="enlase">
                <a href="http://www.lacantera.org.mx" class="enlase">CENTRO DE CAPACITACIÓN LA CANTERA</a><br>
                <label>&copy;Derechos Reservados.</lable>
                </div>


            </footer>



            <script src="js/jquery.js"></script>
            <script src="functions.js"></script>
            <script src="js/script.js"></script>
            <script src="js/validaciones.js"></script>


        </body>
        </html>
