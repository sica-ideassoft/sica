<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$checGrupo =$conn->prepare("SELECT id_materia,id_create_grupo FROM grupos where
	id_materia=:materia AND id_create_grupo=:grupo");
$checGrupo->bindParam(':grupo',$_POST['grupo']);
$checGrupo->bindParam(':materia',$_POST['materia']);
$checGrupo->execute();

if ($checGrupo->fetchColumn(0)) {
	header("location:../error.php");
	exit();
}else{

$vacio = "";
$sql = $conn->prepare("INSERT INTO grupos  VALUES (:idG,:maestro,:materia,:grupo)");
$sql->bindParam(':idG',$vacio);
$sql->bindParam(':maestro',$_POST['maestro']);
$sql->bindParam(':materia',$_POST['materia']);
$sql->bindParam(':grupo',$_POST['grupo']);
$sql->execute();
}


?>