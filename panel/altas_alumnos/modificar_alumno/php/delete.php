<?php
  include_once("../../../../conexion/conexion.php");
  $conn = new Conexion();


	$sql =$conn->prepare("DELETE FROM alumno WHERE id_alumno = :id ");
	$sql->bindParam(':id',$_GET["id"]);
	$sql->execute();
	header("location:../modificar_alumno.php");


 ?>