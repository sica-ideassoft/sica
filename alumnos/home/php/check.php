<?php
include_once("../../conexion/conexion.php");
$conn = new Conexion();

$matricula = $_SESSION['alumno'];

$sql ="SELECT fotografia FROM alumno WHERE matricula='".$matricula."'";

$query = $conn->query($sql);
$row = $query->fetch();

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