
<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$sql =$conn->prepare("SELECT * FROM materias WHERE id_materia =:id");
$sql->bindParam(':id',$_POST["id"]);
$sql->execute();
$materia = $sql->fetch();

?>
