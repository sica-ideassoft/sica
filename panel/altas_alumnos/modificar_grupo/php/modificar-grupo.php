
<?php
include_once("../conectar.php");
$conn = new DB;
$conn->conectar();

$id = $_POST["id"];

$peticion=mysql_query("SELECT
g.id_grupo,g.id_maestro,g.id_materia,g.grado,g.grupo,
m.nombre,
s.nombre_materia
FROM grupos g
INNER JOIN maestro m  ON g.id_maestro = m.id_maestro
INNER JOIN materias s ON g.id_materia = s.id_materia
AND id_grupo = '".$id."'");
$materia= mysql_fetch_array($peticion);

?>
