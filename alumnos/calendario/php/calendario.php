<?php
include_once("../../conexion/conexion.php");
$conn = new Conexion();

$id = 1;
$url = "../../panel/altas_alumnos/calendarios/php/";
$sqll = $conn->prepare("SELECT * FROM calendarios WHERE id_calendario=:id");
$sqll->bindParam(':id',$id);
$sqll->execute();
$row = $sqll->fetch();

?>
