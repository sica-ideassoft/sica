<?php
  include_once("../../../../conexion/conexion.php");
  $conn = new Conexion();

	$sql =$conn->prepare("DELETE FROM materias WHERE id_materia = :id");
	$sql->bindParam(':id',$_GET["id"]);
	$sql->execute();
	header("location:../modificar_materia.php");

?>