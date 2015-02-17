<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$sql = $conn->prepare("UPDATE materias set claveSEP = :sep,nombre_materia = :nombre,fecha_inicio = :fecha1,fecha_fin =:fecha2,credito = :creditos,cal_min =:calificacion,ciclo=:ciclo WHERE  id_materia=:id");

$sql->bindParam(':id',$_POST["id"]);
$sql->bindParam(':sep',$_POST["sep"]);
$sql->bindParam(':nombre',$_POST["nombre"]);
$sql->bindParam(':fecha1',$_POST['fecha1']);
$sql->bindParam(':fecha2',$_POST['fecha2']);
$sql->bindParam(':creditos',$_POST['creditos']);
$sql->bindParam(':calificacion',$_POST['calificacion']);
$sql->bindParam(':ciclo',$_POST['ciclo']);

$sql->execute();

 ?>
