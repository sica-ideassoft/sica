<?php
  include_once("../../../../conexion/conexion.php");
$conn = new Conexion();
	$sql =$conn->prepare("DELETE FROM avisos WHERE id_avisos = :id ");
	$sql->bindParam(':id',$_POST["id"]);
	$sql->execute();
	header("location:../avisos.php");


 ?>