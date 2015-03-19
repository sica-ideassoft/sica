<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$sql= $conn->prepare("UPDATE calificacion set calificacion=:cal,evaluacion = :eval WHERE id_calificacion = :id");

$sql->bindParam(':id',$_POST["id"]);
$sql->bindParam(':cal',$_POST['cal']);
$sql->bindParam(':eval',$_POST["eval"]);
$sql->bindParam(':materia',$_POST["materia"]);

$sql->execute();
 ?>
