<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();
// (id_calificacion,id_alumno,id_materia,creditos,calificacion,Tipo_evaluacion,acumulado)

$sql = $conn->prepare('INSERT INTO calificacion '
	   .'VALUES (:idC, :id, :materia, :credito, :cal, :eval,:acum)');
$vacio = "";

$sql->bindParam(':idC',$vacio);
$sql->bindParam(':id',$_POST['id']);
$sql->bindParam(':materia',$_POST['materia']);
$sql->bindParam(':credito',$_POST['credito']);
$sql->bindParam(':cal',$_POST['cal']);
$sql->bindParam(':eval',$_POST['eval']);
$sql->bindParam(':acum',$vacio);

$sql->execute();

?>
