<?php
session_start();
if (!isset($_SESSION['admin-sica'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../../login_admin/index.php";
</script>';
}
include_once("../conexion.php");
include_once('../PDO_Pagination.php');
include_once("php/paginacion.php");

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang='es'> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="shortcut icon" href="image/favicon.ico">

  <title>ADMINISTRADOR</title>

  <meta name="description" content="Sistemas de calificaciones">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/modificar_alumno.css">
  <link rel="stylesheet" href="css/mensajes.css">

<link rel="stylesheet" href="alertifyjs/css/alertify.css">
<link rel="stylesheet" href="alertifyjs/css/themes/bootstrap.css">


</head>
<body>
      <!--[if lt IE 7]>
          <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]-->
          <header>
            <nav>
              <div class="cantera">
                <img src="image/canter.png" alt="">

              </div>
              <ul class="menu1">
                <li class="lisalir" ><a href="../../logout.php"><span class='salir'></span>SALIR</a></li>
                <li><a href="../home/home.php"><span class='home'></span>HOME</a></li>

              </ul>

              <div class="user">
                <div class="userimg">
                  <?php include_once("php/miniatura.php");
                   ?>
                </div>
                <div class="datos"><p><?php echo  $_SESSION['admin-sica'] ;?></p></div>
              </div>
            </nav>

          </header>
          <div class='heder2'>

            <div class="heder21">
              <div class="heder21sub1">
                <li><a href="#alum"><span class="resp"></span></a></li>
              </div>
              <div class="heder21sub3">
                <li><a  href="#confi"><span class="conf"></span></a></li>
              </div>
            </div>

            <div class="heder22">
              <ul class="heder21sub2">
                <li><a href="../estadisticas/estadisticas.php"><span class="esta"></span>ESTADISTICAS</a></li>
                <li><a href="../mensajes/mensajes.php"><span class="mes"></span>MENSAJES</a></li>
                <li><a href="../calendarios/calendarios.php"><span class="cale"></span>CALENDARIOS</a></li>
              </ul>
            </div>
          </div>
          <!-- inicio menu 4 -->
          <div id="confi" class="contenido menu5">
            <div class="Imenu5">
              <p><span class="isica"></span><b>SICA</b> CANTERA</p>
            </div>
            <div class="Imenu52">
              <p><span class="Iconfig"></span><b>CONFIGURACIÓN</b></p>
            </div>
<!-- incio de menu config -->
            <div class="Ccontent">
                <div class="Cco">
                  <a href="../../control_admin/perfil/perfil.php">
                <div class="mod btn1 btn-1 btn-1e">
                  <span class="modico "></span>
                  <p>PERFIL</p>
                  </div>
                </a>

                <div class="mod2 btn1 btn-1 btn-1a">
                  <span class="modico2 "></span>
                  <p>MATERIALES</p>
                </div>

                 <div class="mod3 btn1 btn-1 btn-1b">
                  <span class="modico3"></span>
                  <p>PUBLICAR</p>
                </div>
                <div class="mod4 btn1 btn-1 btn-1c">
                  <span class="modico4"></span>
                  <p>AVISOS</p>
                </div>

              </div>

            </div>
          </div>
          <!-- finde munu 4 -->

          <!-- inicio de menu2 -->
          <div id="alum"class="contenido menu3">
            <div class="Tmenu3">
              <p><span class="SICA"></span><b>SICA</b> CANTERA</p>
            </div>
            <div class="Tmenu52">
              <p><span class="Tconfig"></span><b>ALUMNOS</b></p>
            </div>
            <div class="Mcontent">
              <div id='cssmenu'>
                  <ul class="ul2">
        <li ><a href='../home/home.php'><span class="icoHome">HOME</span></a></li>
        <li class='has-sub admin activo'><a  href='#'><span class="icoAlumno">ALUMNOS</span></a>
          <ul>
          </li>
               <li><a href='../buscar_alumno/buscar_alumno.php'><span class="icoBuscar"><b>BUSCAR</b></span></a>
            </li>
            <li><a  href='../altas_alumnos/altas_alumno.php'><span class="icoAltas"><b>ALTAS</b></span></a>
            </li>
            <li><a class="activo" href='#'><span class='icoEditarActivo'><b>MODIFICAR/ELIMINAR</b></span></a>

          </ul>
        </li>
        <li class='has-sub admin'><a  href='#'><span class='icoMaestro'>MAESTROS</span></a>
          <ul>
          <li><a   href='../buscar_maestro/buscar_maestro.php'><span class="icoBuscar"><b>BUSCAR</b></span></a>
            </li>
            <li><a  href='../altas_maestro/altas_maestro.php'><span class="icoAltas"><b>ALTAS</b></span></a>
            </li>
            <li><a href='../modificar_maestro/modificar_maestro.php'><span class='icoEditar'><b>MODIFICAR/ELIMINAR</b></span></a>
            </li>

          </ul>
        </li>
          <li class='has-sub admin '><a  href='#'><span class='icoMateria'>MATERIAS</span></a>
          <ul>
          <li><a href="../buscar_materia/buscar_materia.php"><span class="icoBuscar"><b>BUSCAR</b></span></a>
            </li>
            <li><a  href='../altas_materia/altas_materia.php'><span class="icoAltasM"><b>ALTAS</b></span></a>
            </li>
            <li><a href='../modificar_materia/modificar_materia.php'><span class='icoEditar'><b>MODIFICAR/ELIMINAR</b></span></a>
            </li>

          </ul>
        </li>


        <li class='has-sub admin'><a  href='#'><span class="icoCalificaciones">CALIFICACIONES</span></a>
          <ul>
          </li>
               <li><a href='../buscar_calificacion/buscar_calificacion.php'><span class="icoBuscar"><b>BUSCAR</b></span></a>
            </li>
            <li><a  href='../altas_calificacion/altas_calificacion.php'><span class="icoAltasM"><b>ALTAS</b></span></a>
            </li>
            <li><a href='../modificar_calificacion/modificar_calificacion.php'><span class='icoEditar'><b>MODIFICAR/ELIMINAR</b></span></a>

          </ul>
        </li>
   <li class='has-sub admin'><a  href='#'><span class="icoGrupo">GRUPOS</span></a>
          <ul>
          </li>
               <li><a href='../buscar_grupo/buscar_grupo.php'><span class="icoBuscar"><b>BUSCAR</b></span></a>
            </li>
            <li><a  href='../altas_grupos/altas_grupo.php'><span class="icoAltasM"><b>ALTAS</b></span></a>
            </li>
            <li><a href='../modificar_grupo/modificar_grupo.php'><span class='icoEditar'><b>MODIFICAR/ELIMINAR</b></span></a>

          </ul>
        </li>
      <li><a><span>***</span></a></li>
           </div>
           <!-- fin de menu3 -->

           <!-- inicio de menu4 <-->
         </div>

<!--          <div class='footcontent'>
          <table class="tabla1">
            <thead>
              <td class="Nalumno"><p># Alumnos</p></td><td><p>N Alumno</p></td>
            </thead>
            <tbody>
              <td><p></p></td><td><p>hola</p></td>
            </tbody>
            <tfoot>

            </tfoot>
          </table>
        </div> -->
      </div>


      <!-- inicio de section -->
      <section class="seccion1">
        <div class="tem">
        <div class="estacion">
            <span class="estudent"></span>
        </div>
        <p>modificar / eliminar alumnos</p>
        </div>
        <form method="POST" class="formBuscar" action="<?php echo $_SERVER["PHP_SELF"] ?>">
          <input type="text" name="search" value="<?php echo $search ?>" class='inputBuscar'  placeholder="Buscar...">
           <!-- <button type="button" class="btnSearch"><span class="icoSearch"></span></button> -->

          <input type="submit"  class='btnSearch' value="-"></input>
        </form>
        <br><br>
        <center>
          <table>
            <thead class="datosmodificar">
              <tr >
                <th>nombre</th>
                <th>A paterno</th>
                <th>A materno</th>
                <th>matricula</th>
                <th class="grado">grado</th>
                <th class="grado">grupo</th>
                <th class="modi">eliminar-</th>
                <th class="modi">modificar-</th>
                <th class="modi">mostrar</th>
              </tr>
            </thead>
            <tbody  class="tableHead">
              <?php

              foreach($model as $row)
              {
                ?>
                <tr>
                <td><?php echo$row['nombre_alumno'];?></td>
                <td><?php echo$row['A_paterno_alumno'];?></td>
                <td><?php echo$row['A_materno_alumno'];?></td>
                <td><?php echo$row['matricula'];?></td>
                <td><?php echo$row['grado'];?></td>
                <td><?php echo$row['grupo'];?></td>


<td><a class="liEliminar" href="#"
 onclick="delEmpresa(<?php echo $row['id_alumno'];?>);"><span class="eliminar"></span></a></td>
                <td><a class="liModifi" href="modificar.php?id=<?php echo $row['id_alumno'];?>"><span class="modificar"></span></a></td>
                <td><a class="liMostrar" href="mostrar_alumno.php?id=<?php echo $row['id_alumno'];?>"><span class="mostrar"></span></a></td>
                </tr>
              <?php
              }
              ?>
<script type="text/javascript">
function delEmpresa(id) {
alertify.confirm("Realmente quiere eliminar el Alumno.",
  function(){
    alertify.success('Ok');
    window.location = "php/delete.php?id="+id;
  },
  function(){
    // alertify.error('Cancel');
  });

}
</script>
            </tbody>
          </table>

          <div class="control">
            <table class="table2">

              <div class="botones">
                <?php
                $pagination->pages("btn");
                ?>
              </div>
            </table>

      </section>

      <script src="js/jquery.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/calendario.js"></script>
      <script src="js/script.js"></script>
      <script src="js/menu.js"></script>
      <!-- <script src="js/confirmacion.js"></script> -->
      <script src="js/eliminar.js"></script>
      <script src="js/val_campos.js"></script>
      <script src="alertifyjs/alertify.js"></script>

    </body>
    </html>

