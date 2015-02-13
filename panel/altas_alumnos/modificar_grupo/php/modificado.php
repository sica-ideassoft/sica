<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$sql =$conn->prepare("UPDATE grupos set id_maestro = :maestro,id_materia = :materia,id_create_grupo = :grupo WHERE  id_grupo=:id");
$sql->bindParam(':id',$_POST["id"]);
$sql->bindParam(':maestro',$_POST["maestro"]);
$sql->bindParam(':materia',$_POST["materia"]);
$sql->bindParam(':grupo',$_POST["grupo"]);
$sql->execute();
?>
