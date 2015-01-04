<?php
include_once("../../conectar.php");
$conn = new DB;
$conn->conectar();

$id = $_GET["id"];
$nombre       = $_POST["nombre"];
$paterno      = $_POST["paterno"];
$materno      = $_POST["materno"];
$matricula    = $_POST['matricula'];
$curp         = $_POST['curp'];
$telefono     = $_POST['telefono'];
$correo       = $_POST['correo'];
$genero       = $_POST['genero'];
$nacimiento   = $_POST['nacimiento'];
$edad         = $_POST['edad'];
$grado        = $_POST['grado'];
$grupo        = $_POST['grupo'];
$estado       = $_POST['estado'];
$municipio    = $_POST['municipio'];
$calle        = $_POST['calle'];
$nacionalidad = $_POST['nacionalidad'];
$civil        = $_POST['civil'];
$foto         = $_POST['foto'];
$status       = $_POST['status'];

$ssql = "UPDATE alumno set nombre = '".$nombre."',A_paterno = '".$paterno."',A_materno = '".$materno."',matricula = '".$matricula."',curp = '".$curp."',telefono = '".$telefono."',correo = '".$correo."',genero = '".$genero."',fecha_nacimiento = '".$nacimiento."',edad = '".$edad."',grado = '".$grado."',grupo = '".$grupo."',estado = '".$estado."',municipio = '".$municipio."',calle = '".$calle."',nacionalidad = '".$nacionalidad."',fotografia = '".$foto."',estado_civil = '".$civil."',status = '".$status."' WHERE id_alumno= '".$id."'";
if(mysql_query($ssql)){

	header("location:../modificar_alumno.php");
}else{
	echo "no se pudo modificar el cliente";
}
 ?>