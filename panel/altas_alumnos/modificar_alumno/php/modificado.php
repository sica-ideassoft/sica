<?php
include_once("../../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

$id           = mysql_real_escape_string($_POST["id"]);
$nombre       = mysql_real_escape_string($_POST["nombre"]);
$paterno      = mysql_real_escape_string($_POST["paterno"]);
$materno      = mysql_real_escape_string($_POST["materno"]);
$matricula    = mysql_real_escape_string($_POST['matricula']);
$curp         = mysql_real_escape_string($_POST['curp']);
$telefono     = mysql_real_escape_string($_POST['telefono']);
$correo       = mysql_real_escape_string($_POST['correo']);
$genero       = mysql_real_escape_string($_POST['genero']);
$nacimiento   = mysql_real_escape_string($_POST['nacimiento']);
$edad         = mysql_real_escape_string($_POST['edad']);
$grupo        = mysql_real_escape_string($_POST['grupo']);
$estado       = mysql_real_escape_string($_POST['estado']);
$municipio    = mysql_real_escape_string($_POST['municipio']);
$colonia      = mysql_real_escape_string($_POST['colonia']);
$calle        = mysql_real_escape_string($_POST['calle']);
$interior     = mysql_real_escape_string($_POST['interior']);
$exterior     = mysql_real_escape_string($_POST['exterior']);
$nacionalidad = mysql_real_escape_string($_POST['nacionalidad']);
$civil        = mysql_real_escape_string($_POST['civil']);
$foto         = mysql_real_escape_string($_POST['foto']);
$status       = mysql_real_escape_string($_POST['status']);



$ssql = "UPDATE alumno set id_grupo= '".$grupo."',nombre_alumno = '".$nombre."',A_paterno_alumno = '".$paterno."',A_materno_alumno = '".$materno."',matricula = '".$matricula."',curp = '".$curp."',telefono = '".$telefono."',correo = '".$correo."',genero = '".$genero."',fecha_nacimiento = '".$nacimiento."',edad = '".$edad."',estado = '".$estado."',municipio = '".$municipio."',colonia = '".$colonia."',calle = '".$calle."',Ninterior = '".$interior."',Nexterior = '".$exterior."',nacionalidad = '".$nacionalidad."',fotografia = '".$foto."',estado_civil = '".$civil."',status = '".$status."' WHERE id_alumno='".$id."'";
if(mysql_query($ssql)){
	return true;
}else{
	echo "no se pudo modificar el Alumno";
}

 ?>
