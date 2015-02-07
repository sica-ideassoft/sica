<?php
session_start();
$matricula = $_SESSION['alumno'];
?>
<?php
include_once("../../conexion/conexion.php");
$conn = new Conexion();

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);


$sql = "UPDATE alumno set fotografia = '".$rutaDestino."' WHERE  matricula ='".$matricula."'";

$query=$conn->query($sql);


if ($res){
	header("location:../index.php");
}else{
    echo 'no se pudo modificar';
}


?>