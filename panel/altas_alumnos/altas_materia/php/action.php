<?php
  include_once("../../../../conexion/conexion.php");
  $conn = new Conexion();

$checkuser = $conn->prepare("SELECT claveSEP FROM materias WHERE claveSEP=:sep");
$checkuser->bindParam(':sep',$_POST['sep']);
$checkuser->execute();


if ($checkuser->fetchColumn(0)) {
	header("location:../error.php");
	exit();
}else{

$vacio = "";
$sql =$conn->prepare("INSERT INTO materias VALUES (:idM,:sep,:nombre,:fecha1,:fecha2,:creditos,:calificacion)");
$sql->bindParam(':idM',$vacio);
$sql->bindParam(':sep',$_POST['sep']);
$sql->bindParam(':nombre',$_POST['nombre']);
$sql->bindParam(':fecha1',$_POST['fecha1']);
$sql->bindParam(':fecha2',$_POST['fecha2']);
$sql->bindParam(':creditos',$_POST['creditos']);
$sql->bindParam(':calificacion',$_POST['calificacion']);
$sql->execute();

	}

?>