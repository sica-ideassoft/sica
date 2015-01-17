<?php
session_start();
if (isset($_SESSION['maestro-session'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../home/index.php";
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

    <title>Calificaciones</title>

    <meta name="description" content="Sistemas de calificaciones">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

<header>
	<div class="mensajes">
		<div class="icono">
			<span class="stop"></span>
		</div>
		<div class="ico-mensaje">
			<p>user ó password <br>incorrectos</p>
		</div>
	</div>
<!-- fin de bloqueo -->
	<div class="mensajes2">
		<div class="icono2">
			<span class="usuario"></span>
		</div>
		<div class="ico-mensaje2">
			<p>El campo de <b>user</b> <br>esta vació</p>
		</div>
	</div>

	<div class="mensajes3">
		<div class="icono3">
			<span class="contrasena"></span>
		</div>
		<div class="ico-mensaje3">
			<p>El campo <b>password</b> esta vació</p>
		</div>
	</div>




</header>
<section>
    <div class="content-head">
    	<p class="cont-login">login</p>
      <p class="sica"><span class="ico-login"></span>sica</p>
    </div>

<div class="content">
    <div class="content-head">
      <p class="cont-login">login</p>
      <p class="sica"><span class="ico-login"></span>sica</p>
    </div>

    <div class="contenido">
        <div class="form" >

          <form action="" method='post' autocomplete="off">
              <table class="table">
                  <tr>
                      <td><span class="ico ico1"></span><input type="text" placeholder=" User" id="username" name="username"></td>
                  </tr>

                  <tr>
                      <td><span class="ico ico2"></span><input type="password" placeholder=" Password" name="password" id="password"> </td>
                  </tr>

                  <tr>
                      <td><input type="submit" value="enviar"  name="enviar" id="enviar" class="enviar"><span class='ico-enviar'></span></td>
                  </tr>
              </table>

            </div>
          </form>
    </div>
</div>

</section>
<footer>
</footer>
            <script src="js/jquery.js"></script>
            <script src="functions.js"></script>
            <script src="js/script.js"></script>




        </body>
        </html>
