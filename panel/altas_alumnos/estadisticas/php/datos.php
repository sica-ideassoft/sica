<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$sql = "SELECT * FROM alumno";
$query = $conn->query($sql);

$array_alumno = array();

while($row = $query->fetch()){
	$array_alumno[] =$row;
}
echo json_encode($array_alumno);
 ?>