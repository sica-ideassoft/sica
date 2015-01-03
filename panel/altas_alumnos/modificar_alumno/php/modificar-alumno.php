
<?php
include_once("../conectar.php");
require("php/funciones.php");
$conn = new DB;
$conn->conectar();

	$id = $_GET["id"];

$action = getParam(@$_GET["action"],"");

if ($action == "edit") {

	$nombre = sqlValue($_POST["nombre"], "text");
	$paterno = sqlValue($_POST["paterno"], "text");
	$materno = sqlValue($_POST["materno"], "text");


	$sql = "UPDATE alumno SET ";
	$sql.= "nombre=".$nombre.", A_paterno=".$paterno.", A_materno=".$materno."";
	$sql.= "WHERE id_alumno=".$id;
	mysql_query($sql);
	header("location:../");
}

$peticion=mysql_query("SELECT * FROM alumno WHERE id_alumno = '".$id."'");
$alumno = mysql_fetch_array($peticion);

?>
