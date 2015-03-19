<?php
session_start();
if (!isset($_SESSION['maestro-session'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../login_maestro/index.php";
</script>';
}
$user = $_SESSION['maestro-session'];

include_once("../../../conexion/conexion.php");
  $conn = new Conexion();

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);


$sql=$conn->prepare("UPDATE user_maestro set imagen = :imagen WHERE  user =:user");

$sql->bindParam(':imagen',$rutaDestino);
$sql->bindParam(':user',$user);

$sql->execute();

if ($sql){
	header("location:perfil.php");
}else{
    echo 'no se pudo modificar';
}


?>