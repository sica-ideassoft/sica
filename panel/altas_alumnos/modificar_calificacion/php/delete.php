<?php
require("conexion.php");
$id=$_GET["id"];
	$sql = "DELETE FROM materias WHERE id_materia = ".$id;
	$query = $connection->prepare($sql);
	$query->execute();
	header("location:../modificar_materia.php");
?>