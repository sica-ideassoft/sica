<?php
session_start();
if (!isset($_SESSION['sica-alumno'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../login_alumno/index.php";
</script>';
}
include_once("php/check.php");
include_once("php/resultados.php");
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-ES"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="../image_globales/favicon.ico">
        <title>ALUMNOS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <link rel="stylesheet" href="../css_global/normalize.css">
        <link rel="stylesheet" href="../css_global/style.css">
        <link rel="stylesheet" href="css/home.css">
          <link rel="stylesheet" href="css/previw.css">
        <link rel="stylesheet" href="css/style_slider.css">


<link rel="stylesheet" href="alertifyjs/css/alertify.css">
<link rel="stylesheet" href="alertifyjs/css/themes/bootstrap.css">

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <div class="tem">
            <div class="menuresp">
            <span class="show" id="show"></span>
            <span class="hide" id="hide"></span>
            </div>

                <p><span class="cantera"></span><b>SICA</b> CANTERA</p>
            </div>
            <div class="contuser">
                <figure class="img-header">

                   <?php
                        include("php/miniatura.php");
                     ?>

                </figure>

              </div>


            </div>
        </header>

        <!-- menu2  -->

            <div class="menu2" id="menu2" >

                <div class="Cdatos">
                    <div class="figura">
                    <figure class="img-alumnos">
                      <?php
                        include("php/miniatura.php");
                     ?>
                    </figure>
                    </div>
                    <div class="Nuser">
                        <p><?php echo  $row["nombre_alumno"];?></p>
                    </div>

                </div>





                <div class="color">
                   <li class="Rcolor azul" id="azul" ><a href="#"></a></li>
                   <li class="Rcolor verde" id="verde" ><a href="#"></a></li>
                   <li class="Rcolor rosa" id="rosa"><a href="#"></a></li>
                   <li class="Rcolor morado"><a href="#"></a></li>
                   <li class="Rcolor naranja"><a href="#"></a></li>
                </div>

                 <div class="titulo1">
                    <p><span class="title1"></span>TUS SERVICIOS</p>
                </div>
                <div class="titulo2">
                    <p>SERVICIOS</p>
                </div>
                <div class="menu3">
                    <li class="activo"><a href="#"><span class="home"></span>HOME</a></li>
                    <li><a href="../estadisticas/index.php"><span class="esta"></span>ESTADISTICA</a></li>

                </div>



            </div>
<section class="content-principal">
    <div class="principal">
    <section class="fondo-slider">
        <?php
        include_once("php/banner.php");
         ?>
    </section>

     <div class="imagen">
                   <div>
                      <div id="contenedorImagen"></div>
                      <div id="upload_button">
                        <button class="botonVerde" id="profile_image_upload" type="button" >
                          Selecciona la imagen (JPG)

                        </button>
                      </div>
                    </div>
                </div>
<!-- fin de menu 2 -->
<!-- inicio de menu secundario -->

<div id="lessoncup">
    <div id="titlebox">
        <div id="titles">
            <ul class="ul-submenu">
                <li class="li-submenu"><a href="#"><img src="../image_globales/menu/home.svg" width="85" height="82">
                </a></a></li>
                <li class="li-submenu"><a href="../calendario/index.php"><img src="../image_globales/menu/calendario.svg" width="85" height="82"></a></li>
                <!-- <li class="li-submenu"><a href=""><img src="../image_globales/menu/historial.svg" width="85" height="82"></a></li> -->
                <!-- <li class="li-submenu"><a href=""><img src="../image_globales/menu/tareas.svg" width="85" height="82"></a></li> -->
              <!--   <li class="li-submenu"><a href=""><img src="../image_globales/menu/mensajes.svg" width="85" height="82"></a></li> -->
                <li class="li-submenu"><a href="../estadisticas/index.php"><img src="../image_globales/menu/estadisticas.svg" width="85" height="82"></a></li>
                <li class="li-submenu"><a href=""><img src="../image_globales/menu/nuve.svg" width="85" height="82"></a></li>
                <!-- <li class="li-submenu"><a href=""> <img src="../image_globales/menu/materias.svg" width="85" height="82"></a></li> -->
                <li class="li-submenu"><a href="../logout.php"><img src="../image_globales/menu/exit.svg" width="85" height="82"></li>
                <!-- <li class="li-submenu"><a href=""><img src="../image_globales/menu/noticias.svg" width="85" height="82"></a></li> -->
                <li class="li-submenu"><a href="../configuracion/index.php"><img src="../image_globales/menu/confi.svg" width="85" height="82"></a></li>
                <li class="li-submenu"><a href=""><img src="../image_globales/menu/condiciones.svg" width="85" height="82"></a></li>
                <li class="li-submenu"><a href=""><img src="../image_globales/menu/informacion.svg" width="85" height="82"></a></li>
            </ul>
        </div>

        <!-- <div id="more">Más</div> -->

    </div>

</div>

<div class="mensajes-alumno">
    <?php
    include_once("php/preview.php");
     ?>

</div>
</div>
</section>

<!--fin menu secundario -->
<script src="js/jquery.js"></script>
<script src="js/AjaxUpload.js"></script>
<script src="js/subirImagen.js"></script>
<script src="js/hammer.js"></script>
<script src="js/menu.js"></script>
<script src="js/menu-secundario.js"></script>
<script src="alertifyjs/alertify.js"></script>
    </body>
</html>

