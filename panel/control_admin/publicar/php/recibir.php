<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$id=$_POST['id'];
$tema=$_POST['tema'];
$anuncio=$_POST['anuncio'];


$sql = "UPDATE banner set imagen = '".$rutaDestino."',tema = '".$tema."',anuncio = '".$anuncio."' WHERE  id_banner ='".$id."'";

$res=mysql_query($sql);
if ($res){
	header("location:../publicar.php");
}else{
    echo 'no se pudo modificar';
}

?>