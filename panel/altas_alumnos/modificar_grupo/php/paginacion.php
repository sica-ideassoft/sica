<?php
$search = null;
if(isset($_REQUEST["search"]) && $_REQUEST["search"] != "")
{
$search = htmlspecialchars($_REQUEST["search"]);
$pagination->param = "&search=$search";
$pagination->rowCount("SELECT
g.id_grupo,g.id_maestro,g.id_materia,g.grupo,
m.nombre,
s.nombre_materia
FROM grupos g
INNER JOIN maestro m  ON g.id_maestro = m.id_maestro
INNER JOIN materias s ON g.id_materia = s.id_materia
WHERE m.nombre LIKE '%$search%' OR s.nombre_materia LIKE '%$search%' OR g.grupo LIKE '%$search%'");
$pagination->config(3, 5);
$sql = "SELECT
g.id_grupo,g.id_maestro,g.id_materia,g.grupo,
m.nombre,
s.nombre_materia
FROM grupos g
INNER JOIN maestro m  ON g.id_maestro = m.id_maestro
INNER JOIN materias s ON g.id_materia = s.id_materia
WHERE m.nombre LIKE '%$search%' OR s.nombre_materia LIKE '%$search%' OR g.grupo LIKE '%$search%'  ORDER BY g.id_grupo ASC LIMIT $pagination->start_row, $pagination->max_rows";
$query = $connection->prepare($sql);
$query->execute();

$model = array();

while($rows = $query->fetch())
{
    $model[] = $rows;
}
}
else
{
$pagination->rowCount("SELECT
g.id_grupo,g.id_maestro,g.id_materia,g.grupo,
m.nombre,
s.nombre_materia
FROM grupos g
INNER JOIN maestro m  ON g.id_maestro = m.id_maestro
INNER JOIN materias s ON g.id_materia = s.id_materia");
$pagination->config(3, 7);
$sql = "SELECT
g.id_grupo,g.id_maestro,g.id_materia,g.grupo,
m.nombre,
s.nombre_materia
FROM grupos g
INNER JOIN maestro m  ON g.id_maestro = m.id_maestro
INNER JOIN materias s ON g.id_materia = s.id_materia
ORDER BY g.id_grupo ASC LIMIT $pagination->start_row, $pagination->max_rows";
$query = $connection->prepare($sql);
$query->execute();
$model = array();

while($rows = $query->fetch())
{
    $model[] = $rows;
}
}
?>