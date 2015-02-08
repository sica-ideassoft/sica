<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

session_start();
if (!isset($_SESSION['admin-sica'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../../login_admin/index.php";
</script>';
}

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);


$sql = $conn->prepare("UPDATE admin set imagen = :rutaDestino,user = :usuario,password = :pass WHERE  user =:user");
$sql->bindParam(':user',$_SESSION['admin-sica']);
$sql->bindParam(':rutaDestino',$rutaDestino);
$sql->bindParam(':usuario',$_POST['usuario']);
$sql->bindParam(':pass',$_POST['password']);
$sql->execute();

if($sql->execute()===true){

	header("location:../../logout.php");
}


?>