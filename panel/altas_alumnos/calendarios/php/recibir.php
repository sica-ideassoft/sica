<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$rutaEnServidor='calendarios';
$rutaTemporal=$_FILES['pdf']['tmp_name'];
$nombreImagen=$_FILES['pdf']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$id = 1;
$sql = $conn->prepare("UPDATE calendarios set calendario  = :calendario  WHERE id_calendario =:id");

$sql->bindParam(':id',$id);
$sql->bindParam(':calendario',$rutaDestino);
$sql->execute();
if($sql->execute()==true){
	header("location:../calendarios.php");
}



?>