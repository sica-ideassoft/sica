<?php
session_start();
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);


$sql = $conn->prepare("UPDATE alumno set fotografia = :rutaDestino WHERE  matricula =:matricula");
$sql->bindParam(':matricula',$_SESSION['sica-alumno']);
$sql->bindParam(':rutaDestino',$rutaDestino);
$sql->execute();

if ($sql){
	header("location:../index.php");
}


?>