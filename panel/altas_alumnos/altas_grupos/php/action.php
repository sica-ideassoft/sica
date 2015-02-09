<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$checGrupo =$conn->prepare("SELECT id_materia,grupo FROM grupos where
	id_materia=:materia AND grupo=:grupos");
$checGrupo->bindParam(':grupos',$_POST['grupos']);
$checGrupo->bindParam(':materia',$_POST['materia']);
$checGrupo->execute();

if ($checGrupo->fetchColumn(0)) {
	header("location:../error.php");
	exit();
}else{

$vacio = "";
$sql = $conn->prepare("INSERT INTO grupos  VALUES (:idG,:maestro,:materia,:grupos)");
$sql->bindParam(':idG',$vacio);
$sql->bindParam(':maestro',$_POST['maestro']);
$sql->bindParam(':materia',$_POST['materia']);
$sql->bindParam(':grupos',$_POST['grupos']);
$sql->execute();
}


?>