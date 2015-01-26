<?php
session_start();
if (!isset($_SESSION['alumno'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../login_alumno/index.php";
</script>';
}
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

                <div class="salir">
                        <li><a href="../logout.php"><span></span>SALIR</a></li>
                    </div>
                <div class="user1">
                <img src="image/user.png" alt="" width="" class="user11">
                </div>

              </div>
               <div class="flecha">
                    <ul>
                        <li>
                            <a href=""></a>
                        </li>
                    </ul>
               </div>

            </div>
        </header>

        <!-- menu2  -->

            <div class="menu2" id="menu2" >

                <div class="Cdatos">
                    <div class="figura">
                    <figure>
                        <img src="image/user.png" alt="">
                    </figure>

                    </div>
                    <div class="Nuser">
                        <p><?php echo  $_SESSION['alumno'] ;?></p>
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
                    <li><a href="../home/index.php"><span class="home"></span>HOME</a></li>
                    <li><a href="../estadisticas/index.php"><span class="esta"></span>ESTADISTICA</a></li>
                    <li class="activo"><a href="#"><span class="insc"></span>INSCRIPCIONES</a></li>
                </div>

                <div class="titulo2">
                    <p>ACTIVIDAD</p>
                </div>

            </div>


            <section class ="section-content"></section>
            <!-- fin de menu 2 -->
<script src="js/jquery.js"></script>
<script src="js/hammer.js"></script>
<script src="js/menu.js"></script>


    </body>
</html>

