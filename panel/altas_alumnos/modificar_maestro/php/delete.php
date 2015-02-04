<?php

include_once("../../../../conexion/conexion.php");

$id=$_GET["id"];
	$sql = "DELETE FROM maestro WHERE id_maestro = ".$id;
	$query = $connection->prepare($sql);
	$query->execute();
	header("location:../modificar_maestro.php");
?>