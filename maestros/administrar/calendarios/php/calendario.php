<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$id = 1;
$url = "../../../panel/altas_alumnos/calendarios/php/";
$sql = $conn->prepare("SELECT * FROM calendarios WHERE id_calendario=:id");
$sql->bindParam(':id',$id);
$sql->execute();
$row = $sql->fetch();

?>
