<?php
  include_once("../../../../conexion/conexion.php");
  $conn = new Conexion();

	$sql =$conn->prepare("DELETE FROM maestro  WHERE id_maestro = :id ");
	$sql->bindParam(':id',$_GET["id"]);
	$sql->execute();
	header("location:../modificar_maestro.php");

?>