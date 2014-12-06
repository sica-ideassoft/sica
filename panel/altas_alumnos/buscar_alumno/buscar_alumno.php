<?php session_start(); ?>
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
  <link rel="stylesheet" href="css/buscar_alumno.css">
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
                <li class="lisalir" ><a href=""><span class='salir'></span>SALIR</a></li>
                <li><a href=""><span class='home'></span>HOME</a></li>

              </ul>

              <div class="user">
                <div class="userimg">
                  <img src="image/user.png" alt="">
                </div>
                <div class="datos"><p>USER:</p></div>
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
              <p><span class="Iconfig"></span><b>CONFUIGURACIÓN</b></p>
            </div>
<!-- incio de menu config -->
            <div class="Ccontent">
                <div class="Cco">
                <div class="mod btn btn-1 btn-1e">
                  <span class="modico "></span>
                  <p><a href="../../control_admin/perfil/perfil.php">PERFIL</a></p>
                  </div>

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
                 <li class='has-sub admin'><a  href='#'><span>ADMINISTRAR</span></a>
                  <ul>
                   <li><a class="altas" href='../altas_alumnos/altas_alumno.php'><span><b>ALTAS</b></span></a>

                   </li>
                   <li><a href='../modificar_alumno/modificar_alumno.php'><span><b>MODIFICAR/ELIMINAR</b></span></a>

                   </li>
                 </ul>
               </li>
               <li class='last activo'><a href='../buscar_alumno/buscar_alumno.php'><span>BUSCAR</span></a></li>
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
        <div class="tem"><p>buscar alumno</p></div>
            <div class="control">

              <table class="table2">
            </table>

        </form>

      </section>

      <!-- fin de section -->

      <script src="js/jquery.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/calendario.js"></script>
      <script src="js/script.js"></script>
      <script src="js/menu.js"></script>
      <script src="js/val_campos.js"></script>


    </body>
    </html>

