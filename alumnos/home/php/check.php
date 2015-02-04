<?php
include_once("../../conexion/conectar.php");
$conn = new DB();
$conn->conectar();

$matricula = $_SESSION['alumno'];

$imagen = mysql_query("SELECT fotografia FROM alumno WHERE matricula='".$matricula."'");

$row = mysql_fetch_array($imagen);
$foto = $row["fotografia"];

// $checkimg = mysql_query("SELECT fotografia FROM alumno WHERE matricula='".$matricula."'");

// $userimg_exist = mysql_num_rows($checkimg);
if ($foto==true) {
	?>
	<style>
		.imagen{
			display: none;
		}
	</style>
	<?php
}else{

}
 ?>