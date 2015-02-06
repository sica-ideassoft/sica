<?php
include_once("../../../conexion/conexion.php");

$sql = "SELECT * FROM alumno";
$query = $connection->query($sql);
$array_alumno = array();

while($row = $query->fetch()){
	$array_alumno[] =$row;
}
echo json_encode($array_alumno);
 ?>