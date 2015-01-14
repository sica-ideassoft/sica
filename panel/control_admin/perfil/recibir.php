<?php
include_once("../conectar.php");
$conn = new DB();
$conn->conectar();

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$user=$_POST['usuario'];
$pass=$_POST['password'];
$id = 9;

$sql = "UPDATE img_admin set direccion = '".$rutaDestino."',user = '".$user."',password = '".$pass."' WHERE id_img_admin= '".$id."'";

$res=mysql_query($sql);

if ($res){
	header("location:perfil.php");
}else{
    echo 'no se puedo insertar';
}

?>