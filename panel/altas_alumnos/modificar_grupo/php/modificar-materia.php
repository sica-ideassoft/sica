
<?php
include_once("../../../conexion/conexion.php");
 $conn = new Conexion();
$peticion=$conn->prepare("SELECT * FROM materias WHERE id_materia = :id");
$peticion->bindParam(':id',$_GET["id"]);
$peticion->execute();
$materia=$peticion->fetch();

?>
