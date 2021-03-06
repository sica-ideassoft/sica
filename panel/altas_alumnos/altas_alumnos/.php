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
  <link rel="stylesheet" href="css/style_altas.css">
  <link rel="stylesheet" href="css/mensajes.css">




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
            <img src="image/user.png" alt="">
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
           <li><a href='../home/home.php'><span>HOME</span></a></li>
           <li class='has-sub activo'><a  href='#'><span>ADMINISTRAR</span></a>
            <ul>
             <li><a class="altas" href='#'><span><b>ALTAS</b></span></a>

             </li>
             <li><a href='../modificar_alumno/modificar_alumno.php'><span><b>MODIFICAR/ELIMINAR</b></span></a>

             </li>
           </ul>
         </li>
         <li class='last'><a href='../buscar_alumno/buscar_alumno.php'><span>BUSCAR</span></a></li>
         <li><a href='../publicaciones/publicaciones.php'><span>PUBLICACIONES</span></a></li>
       </ul>
     </div>
     <!-- fin de menu3 -->

     <!-- inicio de menu4 -->

   </div>

   <div class='footcontent'>
    <table class="tabla1">
      <thead>
        <td class="Nalumno"><p># Alumnos</p></td><td><p>N Alumno</p></td>
      </thead>
      <tbody>
        <td><p>1200</p></td><td><p>hola</p></td>
      </tbody>
      <tfoot>

      </tfoot>
    </table>
  </div>
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
<!-- inicio de section -->
<section class="seccion1">
  <div class="tem"><p>ALTAS ALUMNOS</p></div>
  <form method="get" name="form1" class="form1">

    <table class='table1'>
      <tr>
        <td><label for="">Nombre:</label></td>
        <td><label for="">Apellido Paterno:</label></td>
        <td><label for="">Apellido Materno:</label></td>

      </tr>
      <tr>
        <td><input type="text" nombre="nombre"  id="nombre" alt="nombre" ></input></td>
        <td><input type="text" nombre="paterno"  id="paterno" ></input></td>
        <td><input type="text" nombre="materno" id="materno" ></input></td>

      </tr>
      <tr>
        <td><label for="">Matricula:</label></td>
        <td><label for="">Curp:</label></td>
        <td><label for="">Telefono:</label></td>
      </tr>

      <tr>
        <td><input type="text" nombre="matricula" id="matricula"></td>
        <td><input type="text" nombre="curp" id="curp" ></td>
        <td><input type="text" nombre="telefono"  id="telefono"></td>

      </tr>
      <tr>
        <td><label for="">Correo:</label></td>
        <td><label for="">Genero:</label></td>
        <td><label for="">Fecha de nacimiento:</label></td>
      </tr>
      <tr>
        <td><input type="text" nombre="correo" id="correo"></td>
        <td><select name="genero" id="genero">
          <option value="masculino">Masculino</option>
          <option value="femenino">Femenino</option>
        </select></td>

        <td><input type="text" nombre="nacimeinto" id="nacimeinto" class="fecha"></td>

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
          <td><input type="text" nombre="grado"  id="grado" ></td>
          <td><input type="text" nombre="grupo" id="grupo"></td>

        </tr>
        <tr>
          <td><label for="">Estado</label></td>
          <td><label for="">Municipio:</label></td>
          <td><label for="">Calle:</label></td>
        </tr>
        <tr>
          <td><input type="text" nombre="estado" id="estado" ></td>
          <td><input type="text" nombre="municipio" id="municipio" ></td>
          <td><input type="text" nombre="calle"  id="calle"></td>
        </tr>
        <tr>
          <td><label for="">Nacionalidad</label></td>
          <td><label for="">Estado Civil:</label></td>
          <td><label for="">Fotografia:</label></td>
        </tr>
        <tr>
        <td><input type="text" nombre="nacionalidad" id="nacionalidad"></td>
        <td><select name="civil"  id="civil">
          <option value="soltero">Soltero</option>
          <option value="casado">Casado</option>
          <option value="libre">Union libre</option>
          <option value="divorciado">Divorceado</option>
          <option value="viudo">Viudo</option>
        </select></td>
        <td colspan="2"><input type="file" nombre="foto" id="foto"></td>
      </tr>
      <tr>
          <td><label for="">Status:</label></td>
        </tr>
        <tr>
          <td><select name="status" id="status">
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
          </select></td>
        </tr>
      </table>



      <div class="control">

        <table class="table2">
          <tr><td>
            <input type="submit" value="ALTAS" class="altasbtn" id="altas">
                  <div class="conent1 color"> <span class="icoaltas"></span></div>
            </input>
          </td><td>
          <input type="reset" value="LIMPIAR" class="borrarbtn">

             <div class="conent1"> <span class="icolimpiar"></span></div>
          </input>

        </td></tr>
      </table>
    </div>
    <div class='validar'><p>lakjsbdkjnsad</p></div>
  </form>

</section>

<!-- fin de section -->

<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/calendario.js"></script>
<script src="js/functions.js"></script>
<script src="js/script.js"></script>
<script src="js/menu.js"></script>
<!-- <script src="js/val_campos.js"></script> -->


</body>
</html>

