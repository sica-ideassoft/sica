<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$vacio = "";
$sql = $conn->prepare("INSERT INTO avisos VALUES (:idA,:aviso,:prioridad,:link)");
$sql->bindParam(':idA',$vacio);
$sql->bindParam(':aviso',$_POST["aviso"]);
$sql->bindParam(':prioridad',$_POST["prioridad"]);
$sql->bindParam(':link',$_POST["url"]);
$sql->execute();

?>