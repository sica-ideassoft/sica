<?php
  include_once("../../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

$id          = mysql_real_escape_string($_POST["id"]);
$sep         = mysql_real_escape_string($_POST["sep"]);
$nombre      = mysql_real_escape_string($_POST["nombre"]);
$fecha1      = mysql_real_escape_string($_POST['fecha1']);
$fecha2      = mysql_real_escape_string($_POST['fecha2']);
$creditos    = mysql_real_escape_string($_POST['creditos']);
$calificacion = mysql_real_escape_string($_POST['calificacion']);

$ssql = "UPDATE materias set claveSEP = '".$sep."',nombre_materia = '".$nombre."',fecha_inicio = '".$fecha1."',fecha_fin = '".$fecha2."',credito = '".$creditos."',cal_min = '".$calificacion."' WHERE  id_materia='".$id."'";
if(mysql_query($ssql)){
	return true;
}else{
	echo "no se pudo modificar la materia";
}

 ?>
