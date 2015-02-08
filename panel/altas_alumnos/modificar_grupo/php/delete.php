<?php
require("../../../../conexion/conexion.php");
$conn = new Conexion();

	$sql =$conn->prepare("DELETE FROM grupos WHERE id_grupo = :id");
	$sql->bindParam(':id',$_GET["id"]);
	$sql->execute();
	header("location:../modificar_grupo.php");
?>