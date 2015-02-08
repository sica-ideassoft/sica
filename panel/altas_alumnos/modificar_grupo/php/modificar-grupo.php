<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$sql = $conn->prepare("SELECT
g.id_grupo,g.id_maestro,g.id_materia,g.grupo,
m.nombre,
s.nombre_materia
FROM grupos g
INNER JOIN maestro m  ON g.id_maestro = m.id_maestro
INNER JOIN materias s ON g.id_materia = s.id_materia
AND id_grupo = :id");
$sql->bindParam(':id',$_POST["id"]);
$sql->execute();
$materia=$sql->fetch();

?>
