<?php
include_once("../../conectar.php");
$conn = new DB;
$conn->conectar();

$id = $_GET["id"];
$nombre       = $_POST['nombre'];
$paterno      = $_POST['paterno'];
$materno      = $_POST['materno'];
$curp         = $_POST['curp'];
$telefono     = $_POST['telefono'];
$correo       = $_POST['correo'];
$genero       = $_POST['genero'];
$edad         = $_POST['edad'];
$civil        = $_POST['civil'];
$nacimiento   = $_POST['nacimiento'];
$estado       = $_POST['estado'];
$municipio    = $_POST['municipio'];
$calle        = $_POST['calle'];
$nacionalidad = $_POST['nacionalidad'];
$ssql = "UPDATE maestro set nombre = '".$nombre."',A_paterno = '".$paterno."',A_materno = '".$materno."',curp = '".$curp."',telefono = '".$telefono."',correo = '".$correo."',genero = '".$genero."',edad = '".$edad."',estado_civil = '".$civil."',Estado = '".$estado."',municipio = '".$municipio."',calle = '".$calle."',nacionalidad = '".$nacionalidad."' WHERE id_maestro= '".$id."'";
if(mysql_query($ssql)){

	header("location:../modificar_maestro.php");
}else{
	echo "no se pudo modificar el cliente";
}
 ?>