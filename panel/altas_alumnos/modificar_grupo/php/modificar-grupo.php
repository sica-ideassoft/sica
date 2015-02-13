<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$sql = $conn->prepare("SELECT
g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
m.nombre,
s.nombre_materia,
c.id_create_grupo,c.create_grupo,c.create_grado

FROM grupos g
INNER JOIN maestro m  ON g.id_maestro = m.id_maestro
INNER JOIN create_grupo c ON c.id_create_grupo = g.id_create_grupo

INNER JOIN materias s ON g.id_materia = s.id_materia
AND id_grupo = :id");
$sql->bindParam(':id',$_POST["id"]);
$sql->execute();
$materia=$sql->fetch();

?>
