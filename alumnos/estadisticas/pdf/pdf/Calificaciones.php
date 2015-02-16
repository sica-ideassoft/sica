<?php
session_start();
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
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Calificaciones</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<header>
    <figure class="cantera-ico">
    <img src="img/cantera.png" alt="">
    </figure>

    <figure class="sems">
        <img src="img/sems.png" alt="">
    </figure>

</header>
<section class="content-cal">
    <div class="cal-scroll">
        <div class="header-cal">

            <h2>historial académico</h2>
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
                    <label for=""><?php echo $credito["total"];?> de <?php echo $total_credito['total_credito']; ?></label>
                        </td>
                    </tr>
                </table>
                <table  class="table2">
                    <tr>
                        <td>
                            <label for="" class="title">aprobadas:</label>
                        </td>
                        <td>
                            <label for=""><?php echo $aprovada['aprovada']; ?></label>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <label for="" class="title">reprobadas:</label>
                        </td>
                        <td>
                            <label for=""><?php echo $reprovada['reprovada']; ?></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                <label for="" class="title">no presentadas:</label>
                        </td>
                        <td>
                            <label for=""><?php echo $NA['noAplica']; ?></label>
                        </td>
                    </tr>


                     <tr>
                        <td>
                            <label for="" class="title">total:</label>
                        </td>
                        <td>
                            <label for=""><?php echo $Nmateria['materia'];?></label>
                        </td>
                    </tr>
                </table>

                <table class="table3">
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
                            <label for="" class="title">promedio:</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">71.6</label>
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
                                   <?php echo date("Y-m-d"); ?>
                               </label>
                        </td>
                    </tr>
                </table >
            </div>
        </div>
    </div>



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

                <div class="qr">
                <?php

                   $matricula = $row['matricula'];
                   $url = "../../temp/";
                   $ext = ".jpg";
                 ?>
                <figure class="qr-content">
                    <img src="<?php echo $url.$matricula.$ext;?>" alt="">
                </figure>
            </div>
            </div>

</div>
</section>

<footer>
    <p>Este documento, es de carácter informativo queda prohibida la violación de la información publicada ya que
        es de carácter privado y de uso exclusivo del control escolar del Centro de Capacitación publicadas son las
        finales del parcial correspondiente al periodo establecido en el plan de estudios.</p>
    </footer>


</body>
</html>

