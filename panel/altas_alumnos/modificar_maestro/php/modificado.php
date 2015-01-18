<?php
include_once("../../conectar.php");
$conn = new DB;
$conn->conectar();

$id           = mysql_real_escape_string($_POST["id"]);
$nombre       = mysql_real_escape_string($_POST['nombre']);
$paterno      = mysql_real_escape_string($_POST['paterno']);
$materno      = mysql_real_escape_string($_POST['materno']);
$clavep       = mysql_real_escape_string($_POST['clavep']);
$curp         = mysql_real_escape_string($_POST['curp']);
$telefono     = mysql_real_escape_string($_POST['telefono']);
$correo       = mysql_real_escape_string($_POST['correo']);
$genero       = mysql_real_escape_string($_POST['genero']);
$edad         = mysql_real_escape_string($_POST['edad']);
$civil        = mysql_real_escape_string($_POST['civil']);
$nacimiento   = mysql_real_escape_string($_POST['nacimiento']);
$estado       = mysql_real_escape_string($_POST['estado']);
$municipio    = mysql_real_escape_string($_POST['municipio']);
$calle        = mysql_real_escape_string($_POST['calle']);
$nacionalidad = mysql_real_escape_string($_POST['nacionalidad']);

$ssql = "UPDATE maestro set nombre = '".$nombre."',A_paterno = '".$paterno."',A_materno = '".$materno."',clave = '".$clavep."',curp = '".$curp."',telefono = '".$telefono."',correo = '".$correo."',genero = '".$genero."',edad = '".$edad."',estado_civil = '".$civil."',Estado = '".$estado."',municipio = '".$municipio."',calle = '".$calle."',nacionalidad = '".$nacionalidad."' WHERE id_maestro= '".$id."'";
if(mysql_query($ssql)){
	header("location:../modificar_maestro.php");
}else{
	echo "no se pudo modificar el cliente";
}
 ?>