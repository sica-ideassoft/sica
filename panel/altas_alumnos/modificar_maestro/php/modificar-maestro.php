
<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$peticion=$conn->prepare("SELECT * FROM maestro WHERE id_maestro = :id");
$peticion->bindParam(':id',$_POST["id"]);
$peticion->execute();

$alumno = $peticion->fetch();

$peticion_user=$conn->prepare("SELECT * FROM user_maestro WHERE id_maestro = :id");
$peticion_user->bindParam(':id',$_POST["id"]);
$peticion_user->execute();

$maestro_user = $peticion_user->fetch();


?>
