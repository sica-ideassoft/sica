<?php
$search = null;
if(isset($_REQUEST["search"]) && $_REQUEST["search"] != "")
{
$search = htmlspecialchars($_REQUEST["search"]);
$pagination->param = "&search=$search";
$pagination->rowCount("SELECT * FROM materias WHERE nombre LIKE '%$search%' OR profesor LIKE '%$search%' OR credito LIKE '%$search%'");
$pagination->config(3, 5);
$sql = "SELECT * FROM materias WHERE nombre LIKE '%$search%' OR profesor LIKE '%$search%' OR credito LIKE '%$search%' ORDER BY id_materia ASC LIMIT $pagination->start_row, $pagination->max_rows";
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
$sql = "SELECT * FROM materias ORDER BY id_materia ASC LIMIT $pagination->start_row, $pagination->max_rows";
$query = $connection->prepare($sql);
$query->execute();
$model = array();

while($rows = $query->fetch())
{
    $model[] = $rows;
}
}
?>