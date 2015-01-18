<?php
session_start();
if (!isset($_SESSION['admin-sica'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../../login_admin/index.php";
</script>';
}
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

  <title>Calificaciones</title>

  <meta name="description" content="Sistemas de calificaciones">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/style_materia.css">
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
            <?php include_once("php/miniatura.php"); ?>
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
          <div class="mod btn btn-1 btn-1e" >
            <span class="modico "></span>
            <p>PERFIL</p>
            </div>
            </a>

          <div class="mod2 btn btn-1 btn-1a">
            <span class="modico2 "></span>
            <p>MATERIALES</p>
          </div>

           <div class="mod3 btn btn-1 btn-1b">
            <span class="modico3"></span>
            <p>PUBLICAR</p>
          </div>
          <div class="mod4 btn btn-1 btn-1c">
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
        <li class='has-sub admin'><a  href='#'><span class="icoAlumno">ALUMNOS</span></a>
          <ul>
          </li>
               <li><a href='../buscar_alumno/buscar_alumno.php'><span class="icoBuscar"><b>BUSCAR</b></span></a>
            </li>
            <li><a  href='#'><span class="icoAltas"><b>ALTAS</b></span></a>
            </li>
            <li><a href='../modificar_alumno/modificar_alumno.php'><span class='icoEditar'><b>MODIFICAR/ELIMINAR</b></span></a>

          </ul>
        </li>
        <li class='has-sub admin'><a  href='#'><span class='icoMaestro'>MAESTROS</span></a>
          <ul>
          <li><a href='../buscar_maestro/buscar_maestro.php'><span class="icoBuscar"><b>BUSCAR</b></span></a>
            </li>
            <li><a  href='../altas_maestro/altas_maestro.php'><span class="icoAltas"><b>ALTAS</b></span></a>
            </li>
            <li><a href='../modificar_maestro/modificar_maestro.php'><span class='icoEditar'><b>MODIFICAR/ELIMINAR</b></span></a>
            </li>

          </ul>
        </li>
          <li class='has-sub admin activo'><a  href='#'><span class='icoMateria'>MATERIAS</span></a>
          <ul>
          <li><a  href='../buscar_materia/buscar_materia.php'><span class="icoBuscar"><b>BUSCAR</b></span></a>
            </li>
            <li><a class="activo" href='#'><span class="icoAltasMActivo"><b>ALTAS</b></span></a>
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

      <li><a><span>***</span></a></li>
     </div>
     <!-- fin de menu3 -->

     <!-- inicio de menu4 -->

   </div>

<!--    <div class='footcontent'>

    <div class="headtabla1"><p>Recien Ingresados</p></div>

    <table class="tabla1">
      <div class="mosAlumno">
        <div id="show"></div>
      </div>

    </table>
  </div> -->
</div>

<!-- mensajes de validacion -->
<div class="mensajes">
  <div class="Logom">
      <label><b>Campos vacios</b> no se puede Enviar la petición</label>
  </div>
  <div class="divmensaje">
      <span class="Mico"></span>
  </div>
</div>
<!-- finde  mensajes de validacion -->
<!-- mensajes de matricula validacion -->
<div class="mensajesMatricula">
  <div class="Logom2">
      <label>Los caracteres de la <b>Matricula</b> son incorrectos</label>
  </div>
  <div class="divmensaje2">
      <span class="Mico2"></span>
  </div>
</div>
<!-- finde  mensajes matricula de validacion -->
  <!-- mensajes de curp validacion -->
<div class="mensajesCurp">
  <div class="Logom2">
      <label>Los caracteres de la <b>CURP</b> son incorrectos</label>
  </div>
  <div class="divmensaje2">
      <span class="Mico2"></span>
  </div>
</div>
<!-- finde  mensajes curp de validacion -->


  <!-- mensajes de curp validacion -->
<div class="mensajesTelefono">
  <div class="Logom2">
      <label>Los caracteres del <b>Telefono</b> son incorrectos</label>
  </div>
  <div class="divmensaje2">
      <span class="Mico2"></span>
  </div>
</div>
<!-- finde  mensajes curp de validacion -->
 <!-- mensajes de curp validacion -->
<div class="mensajesEmail">
  <div class="Logom2">
      <label>Los caracteres del <b>E-mail</b> son incorrectos</label>
  </div>
  <div class="divmensaje2">
      <span class="Mico2"></span>
  </div>
</div>
<!-- finde  mensajes curp de validacion -->
 <!-- mensajes de curp validacion -->
<div class="mensajesCorrecto">
  <div class="Logom3">
      <label>Los datos se enviaron <b>Correctamente</b></label>
  </div>
  <div class="divmensaje3">
      <span class="Mico3"></span>
  </div>
</div>

<!-- <div class="mensajesAlumno">
  <div class="Logom4">
      <div id="show"></div>
  </div>
  <div class="divmensaje4">
      <span class="Mico4"></span>
  </div>
</div>
 -->
<!-- finde  mensajes curp de validacion -->

<!-- inicio de section -->
<section class="seccion1">
  <div class="tem">
   <div class="estacion">
            <span class="estudent"></span>
        </div>
  <p>ALTAS MATERIAS</p>
  </div>
  <form method="POST" action="" name="form1" class="form1">

    <table class='table1'>
    <tr>
      <td><label for="">Clave SEP:</label></td>
      <td><label for="">Modulo:</label></td>
    </tr>
    <tr>
        <td><input type="text" name="sep"  id="sep"></input></td>
        <td><input type="text" name="modulo"  id="modulo" alt="modulo" ></input></td>
    </tr>
      <tr>
        <td><label for="">Nombre:</label></td>
        <td><label for="">Profesor:</label></td>


      </tr>
      <tr>
        <td><input type="text" name="nombre"  id="nombre" alt="nombre" ></input></td>
        <td><input type="text" name="profesor"  id="profesor" ></input></td>
      </tr>
      <tr>
        <td><label for="">Fecha Inicio:</label></td>
        <td><label for="">Fecha fin:</label></td>

      </tr>

      <tr>
        <td><input type="text" name="fecha1" id="fecha1" class="fecha"></td>
        <td><input type="text" name="fecha2" id="fecha2" class="fecha"></td>
      </tr>
      <tr>
        <td><label for="">Creditos:</label></td>
        <td><label for="">Calificacion:</label></td>

      </tr>
      <tr>

<td class="edad"><select name="creditos" id="creditos" >
            <?php
              for ($i=1; $i <= 20 ; $i++) {
            echo "<option>".$i."</option>";
              }
             ?>
          </select><label for="">Creditos</label> </td>

        <td><input type="text" name="calificacion" id="calificacion"></td>

        </tr>

      </table>



      <div class="control">

        <table class="table2">

          <tr>
          <td>


          </td><td>
            <input type="submit" value="ALTAS" class="altasbtn" id="enviar">
                  <div class="conent1 color"> <span class="icoaltas"></span></div>
            </input>
          </td><td>
          <input type="reset" value="LIMPIAR" class="borrarbtn">

             <div class="conent1"> <span class="icolimpiar"></span></div>
          </input>

        </td></tr>
      </table>
    </div>

  </form>




<div class="space"></div>



</section>

<!-- fin de section -->

<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/menu.js"></script>
<script src="js/calendario.js"></script>
<script src="js/script.js"></script>
<script src="js/functions.js"></script>

<script src="alertifyjs/alertify.js"></script>


</body>
</html>



