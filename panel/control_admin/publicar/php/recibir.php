<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$sql =$conn->prepare("UPDATE banner set imagen = :rutaDestino,tema = :tema,anuncio = :anuncio WHERE  id_banner =:id");

$sql->bindParam(':id',$_POST['id']);
$sql->bindParam(':rutaDestino',$rutaDestino);
$sql->bindParam(':tema',$_POST['tema']);
$sql->bindParam(':anuncio',$_POST['anuncio']);
$sql->execute();

if ($sql== true){
	header("location:../publicar.php");

}
?>