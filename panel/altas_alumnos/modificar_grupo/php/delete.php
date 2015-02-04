<?php
require("../../../../conexion/conexion.php");

$id=$_GET["id"];
	$sql = "DELETE FROM grupos WHERE id_grupo = ".$id;
	$query = $connection->prepare($sql);
	$query->execute();
	header("location:../modificar_grupo.php");
?>