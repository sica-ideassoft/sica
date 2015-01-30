<?php
session_start();
if (!isset($_SESSION['alumno'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../login_alumno/index.php";
</script>';
}
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
        <link rel="stylesheet" href="css/calificaciones.css">


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
                    <figure class="img-alumnos">
                      <?php
                        include("php/miniatura.php");
                     ?>
                    </figure>

                    </div>
                    <div class="Nuser">
                        <p><?php echo  $row["nombre_alumno"]?></p>
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

                    <li class="activo"><a href="#"><span class="esta"></span>ESTADISTICA</a></li>

                    <li ><a href="../inscripciones/index.php"><span class="insc"></span>INSCRIPCIONES</a></li>
                </div>

            </div>



<div id="lessoncup">
    <div id="titlebox">
        <div id="titles">
            <ul class="ul-submenu">
                <li class="li-submenu"><a href=""><img src="../image_globales/menu/home.svg" width="85" height="82">
                </a></a></li>
                <li class="li-submenu"><a href=""><img src="../image_globales/menu/calendario.svg" width="85" height="82"></a></li>
                <li class="li-submenu"><a href=""><img src="../image_globales/menu/historial.svg" width="85" height="82"></a></li>
                <li class="li-submenu"><a href=""><img src="../image_globales/menu/tareas.svg" width="85" height="82"></a></li>
                <li class="li-submenu"><a href=""><img src="../image_globales/menu/mensajes.svg" width="85" height="82"></a></li>
                <li class="li-submenu"><a href=""><img src="../image_globales/menu/estadisticas.svg" width="85" height="82"></a></li>
                <li class="li-submenu"><a href=""><img src="../image_globales/menu/nuve.svg" width="85" height="82"></a></li>
                <li class="li-submenu"><a href=""> <img src="../image_globales/menu/materias.svg" width="85" height="82"></a></li>
                <li class="li-submenu"><a href="../logout.php"><img src="../image_globales/menu/exit.svg" width="85" height="82"></li>
                <li class="li-submenu"><a href=""><img src="../image_globales/menu/noticias.svg" width="85" height="82"></a></li>
                <li class="li-submenu"><a href=""><img src="../image_globales/menu/confi.svg" width="85" height="82"></a></li>
                <li class="li-submenu"><a href=""><img src="../image_globales/menu/condiciones.svg" width="85" height="82"></a></li>
                <li class="li-submenu"><a href=""><img src="../image_globales/menu/informacion.svg" width="85" height="82"></a></li>
            </ul>
        </div>
        <div id="more">Más</div>
    </div>
</div>
<!--fin menu secundario -->
<section class="content-cal">
    <div class="cal-scroll">
        <div class="header-cal">
            <figure>
                <img src="image/cantera.svg" alt="">
            </figure>
             <figure>
                <img class="ico-prepa" src="image/prepa.svg" alt="">
            </figure>
            <h5>historial académico</h5>
            <div class="info-alumno">
                <table class="table1">
                    <tr>
                        <td>
                            <label for="" class="title">nombre:</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
    <label for=""><?php echo $row["nombre_alumno"]." ".$row["A_paterno_alumno"]." ".$row["A_materno_alumno"];?></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="" class="title">programa educativo:</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">informática</label>
                        </td>
                    </tr>
                     <tr>
                        <td>
                            <label for="" class="title">promedio:</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">
                            <?php echo $row["calificacion"];?>
                            </label>
                        </td>
                    </tr>

                     <tr>
                        <td>
                            <label for="" class="title">creditos:</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">101.5 de 100</label>
                        </td>
                    </tr>
                </table>
                <table class="tabla2">
                    <tr>
                        <td>
                            <label for="" class="title">Matricula:</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for=""><?php echo $row["matricula"];?></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="" class="title">Nivel:</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">preparatoria bachillerato</label>
                        </td>
                    </tr>


                     <tr>
                        <td>
                            <label for="" class="title">fecha de consulta</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">
                                <script>
                                     var f = new Date();
document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
                                </script>
                            </label>
                        </td>
                    </tr>

                </table >
                     <table  class="table3">
                    <tr>
                        <td>
                            <label for="" class="title">aprobadas:</label>
                        </td>
                        <td>
                            <label for="">16</label>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <label for="" class="title">reprobadas:</label>
                        </td>
                        <td>
                            <label for="">25</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="" class="title">no presentadas:</label>
                        </td>
                        <td>
                            <label for="">7</label>
                        </td>
                    </tr>


                     <tr>
                        <td>
                            <label for="" class="title">total:</label>
                        </td>
                        <td>
                            <label for="">40</label>
                        </td>
                    </tr>
                </table>
        <div class="content-histrial">
                <table class="historial">
                    <thead>
                        <tr>
                            <td>clave sep</td>
                            <td>creditos</td>
                            <td class="materia">asignatura</td>
                            <td>cal</td>
                            <td>ciclo</td>
                            <td>tipo de evaluación</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                           include_once("php/historial.php");
                        ?>

                    </tbody>
                </table>
            </div>

            </div>
        </div>
    </div>
</section>

<div class="pdf">
    <div class="img-pdf">
        <a href="pdf/pdf/cantera.php"><img src="image/downloads.png" alt=""></a>
    </div>
    <div class='pdf-label'>
        <p>pdf</p>
    </div>
</div>

            <!-- fin de menu 2 -->
<script src="js/jquery.js"></script>
<script src="js/hammer.js"></script>
<script src="js/menu.js"></script>
<script src="js/menu-secundario.js"></script>


    </body>
</html>

