<?php
$search = null;
if(isset($_REQUEST["search"]) && $_REQUEST["search"] != "")
{
$search = htmlspecialchars($_REQUEST["search"]);
$pagination->param = "&search=$search";
$pagination->rowCount("SELECT * FROM alumno WHERE nombre LIKE '%$search%' OR A_paterno LIKE '%$search%' OR A_materno LIKE '%$search%'");
$pagination->config(3, 5);
$sql = "SELECT * FROM alumno WHERE nombre LIKE '%$search%' OR A_paterno LIKE '%$search%' OR A_materno LIKE '%$search%' ORDER BY id_alumno ASC LIMIT $pagination->start_row, $pagination->max_rows";
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
$pagination->rowCount("SELECT * FROM alumno");
$pagination->config(3, 7);
$sql = "SELECT * FROM alumno ORDER BY id_alumno ASC LIMIT $pagination->start_row, $pagination->max_rows";
$query = $connection->prepare($sql);
$query->execute();
$model = array();

while($rows = $query->fetch())
{
    $model[] = $rows;
}
}
?>