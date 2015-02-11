<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$vacio = "";
$sql = $conn->prepare("INSERT INTO avisos VALUES (:idA,:aviso,:imagen,:prioridad,:link)");
$sql->bindParam(':idA',$vacio);
$sql->bindParam(':aviso',$_POST["aviso"]);
$sql->bindParam(':imagen',$rutaDestino);
$sql->bindParam(':prioridad',$_POST["prioridad"]);
$sql->bindParam(':link',$_POST["url"]);
$sql->execute();

if ($sql== true){
	header("location:../avisos.php");

}
?>