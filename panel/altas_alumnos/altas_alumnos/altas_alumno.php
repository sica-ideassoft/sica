<?php
session_start();
if (!isset($_SESSION['admin-sica'])) {
echo '<script>
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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="shortcut icon" href="image/favicon.ico">

  <title>ADMINISTRADOR</title>

  <meta name="description" content="Sistemas de calificaciones">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/style_altas.css">
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
            <?php  include_once("php/miniatura.php"); ?>
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
        <li class='has-sub admin activo'><a  href='#'><span class="icoAlumno">ALUMNOS</span></a>
          <ul>
          </li>
               <li><a href='../buscar_alumno/buscar_alumno.php'><span class="icoBuscar"><b>BUSCAR</b></span></a>
            </li>
            <li><a class="activo " href='#'><span class="icoAltasActivo"><b>ALTAS</b></span></a>
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
     </li>
          <li class='has-sub admin'><a  href='#'><span class='icoMateria'>MATERIAS</span></a>
          <ul>
          <li><a  href='../buscar_materia/buscar_materia.php'><span class="icoBuscar"><b>BUSCAR</b></span></a>
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
  <p>ALTAS ALUMNOS</p>
  </div>
  <form method="POST" action="" enctype="multipart/form-data" name="form1" class="form1">

    <table class='table1'>
      <tr>
        <td><label for="">Nombre:</label></td>
        <td><label for="">Apellido Paterno:</label></td>
        <td><label for="">Apellido Materno:</label></td>

      </tr>
      <tr>
        <td><input type="text" name="nombre"  id="nombre" alt="nombre" ></input></td>
        <td><input type="text" name="paterno"  id="paterno" ></input></td>
        <td><input type="text" name="materno" id="materno" ></input></td>

      </tr>
      <tr>
        <td><label for="">Matricula:</label></td>
        <td><label for="">Curp:</label></td>
        <td><label for="">Telefono:</label></td>
      </tr>

      <tr>
        <td><input type="text" name="matricula" id="matricula"></td>
        <td><input type="text" name="curp" id="curp" ></td>
        <td><input type="text" name="telefono"  id="telefono"></td>

      </tr>
      <tr>
        <td><label for="">Correo:</label></td>
        <td><label for="">Genero:</label></td>
        <td><label for="">Fecha de nacimiento:</label></td>
      </tr>
      <tr>
        <td><input type="text" name="correo" id="correo"></td>
        <td><select name="genero" id="genero">
          <option value="masculino">Masculino</option>
          <option value="femenino">Femenino</option>
        </select></td>

        <td><input type="text" name="nacimiento" id="nacimiento" class="fecha"></td>

        </tr>
        <tr>
          <td><label for="">Edad:</label></td>
          <td><label for="">Grado:</label></td>
          <td><label for="">Grupo:</label></td>

        </tr>

        <tr>
          <td class="edad"><select name="edad" id="edad" >
            <?php
              for ($i=10; $i <= 90 ; $i++) {
            echo "<option>".$i."</option>";
              }
             ?>
          </select><label for="">Años</label> </td>
          <td class='grado'><select name="grado"  id="grado">
              <?php include_once("php/grupo.php");
               grado();
              ?>
          </select>
          <label for="">ro</label></td>
          <!-- <td><input type="text" name="grado"  id="grado" ></td> -->
          <!-- <td><input type="text" name="grupo" id="grupo"></td> -->
           <td><select name="grupo" id="grupo" id="">
              <?php
               grupo();
              ?>
          </select></td>

        </tr>
        <tr>
          <td><label for="">Estado</label></td>
          <td><label for="">Municipio:</label></td>
          <td><label for="">Colonia:</label></td>

        </tr>
        <tr>
          <td><select name="estado" id="estado">
            <?php
            include_once("php/select.php");
              estado();
             ?>
          </select></td>
          <!-- <td><input type="text" name="estado" id="estado" ></td> -->
          <td><input type="text" name="municipio" id="municipio" ></td>
          <td><input type="colonia" id="colonia" class='colonia'></td>
        </tr>
        <tr>
           <td>
          <label for="">Calle:</label>
          <label for="" class="Linterior">#Int.:</label>
          <label for="" class="Lexterior">#Ext.:</label>
          </td>
          <td><label for="">Nacionalidad</label></td>
          <td><label for="">Estado Civil:</label></td>
        </tr>
        <tr>
        <td>
          <input type="text" name="calle"  class ="calle" id="calle">
           <input type="text" name="interior" class="interior" id="interior" placeholder="#">
           <input type="text" name='exterior' id="exterior" class="exterior" placeholder="#">
          </td>
        <td><select name="nacionalidad" id="nacionalidad">
          <option value="Mexicana">Mexicana</option>
          <option value="Extrangera">Extrangera</option>
        </select></td>
        <td><select name="civil"  id="civil">
          <option value="soltero">Soltero</option>
          <option value="casado">Casado</option>
          <option value="libre">Union libre</option>
          <option value="divorciado">Divorceado</option>
          <option value="viudo">Viudo</option>
        </select></td>

      </tr>
      <tr>
          <td><label for="">Fotografia:</label></td>

      </tr>
      <tr>

         <td colspan="2"><input type="file" name="imagen" id="imagen"></td>
      </tr>
<!--       <tr>
          <td><label for="">Status:</label></td>
        </tr>
        <tr>
          <td><select name="status" id="status">
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
          </select></td>
        </tr> -->
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
<script src="js/functions.js"></script>
<script src="js/script.js"></script>
<script src="alertifyjs/alertify.js"></script>


</body>
</html>



