<?php
require("../../conexion.php");

$id=$_GET["id"];
	$sql = "DELETE FROM alumno WHERE id_alumno = ".$id;
	$query = $connection->prepare($sql);
	$query->execute();
	header("location:../modificar_alumno.php");
?>