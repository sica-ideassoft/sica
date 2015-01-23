<?php
$search = null;
if(isset($_REQUEST["search"]) && $_REQUEST["search"] != "")
{
$search = htmlspecialchars($_REQUEST["search"]);
$pagination->param = "&search=$search";

$pagination->rowCount("SELECT m.id_materia,m.profesor,m.nombre_materia,m.nombre_materia,m.credito,m.cal_min,u.id_maestro,u.user,o.id_maestro,o.nombre
FROM materias m
INNER JOIN user_maestro u ON  m.profesor = u.user
INNER JOIN maestro o  ON o.id_maestro =  u.id_maestro
WHERE m.nombre_materia LIKE '%$search%' OR o.nombre LIKE '%$search%'
OR m.credito LIKE '%$search%' OR m.cal_min LIKE '%$search%'");



// "SELECT * FROM materias WHERE nombre LIKE '%$search%' OR profesor LIKE '%$search%' OR credito LIKE '%$search%'");
$pagination->config(3, 5);
// $sql = "SELECT * FROM materias WHERE nombre LIKE '%$search%' OR profesor LIKE '%$search%' OR credito LIKE '%$search%' ORDER BY id_materia ASC LIMIT $pagination->start_row, $pagination->max_rows";

$sql = "SELECT m.id_materia,m.profesor,m.nombre_materia,m.nombre_materia,m.credito,m.cal_min,u.id_maestro,u.user,o.id_maestro,o.nombre
FROM materias m
INNER JOIN user_maestro u ON  m.profesor = u.user
INNER JOIN maestro o  ON o.id_maestro =  u.id_maestro
WHERE m.nombre_materia LIKE '%$search%' OR o.nombre LIKE '%$search%'
	OR m.credito LIKE '%$search%'
	OR m.cal_min LIKE '%$search%'
	ORDER BY id_materia ASC LIMIT $pagination->start_row, $pagination->max_rows";
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
$pagination->rowCount("SELECT * FROM materias");
$pagination->config(3, 7);

$sql = "SELECT m.id_materia,m.profesor,m.nombre_materia,m.nombre_materia,m.credito,m.cal_min,u.id_maestro,u.user,o.id_maestro,o.nombre
FROM materias m
INNER JOIN user_maestro u ON  m.profesor = u.user
INNER JOIN maestro o  ON o.id_maestro =  u.id_maestro
ORDER BY id_materia ASC LIMIT $pagination->start_row, $pagination->max_rows";

// $sql = "SELECT * FROM materias ORDER BY id_materia ASC LIMIT $pagination->start_row, $pagination->max_rows";
$query = $connection->prepare($sql);
$query->execute();
$model = array();

while($rows = $query->fetch())
{
    $model[] = $rows;
}
}
?>