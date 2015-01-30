<?php
include_once("../../conectar.php");
$conn = new DB;
$conn->conectar();

$id         = mysql_real_escape_string($_POST["id"]);
$materia    = mysql_real_escape_string($_POST["materia"]);
$maestro    = mysql_real_escape_string($_POST["maestro"]);
$grado      = mysql_real_escape_string($_POST["grado"]);
$grupo      = mysql_real_escape_string($_POST["grupo"]);

$ssql = "UPDATE grupos set id_maestro = '".$maestro."',id_materia = '".$materia."',grado = '".$grado."',grupo = '".$grupo."' WHERE  id_grupo='".$id."'";
if(mysql_query($ssql)){
	return true;
}else{
	echo "no se pudo modificar la materia";
}

 ?>
