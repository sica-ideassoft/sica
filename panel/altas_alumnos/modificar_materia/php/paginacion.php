<?php
include_once("../../../conexion/PDO_Pagination.php");
$conn = new Conexion();
$pagination = new PDO_Pagination($conn);
$search = null;
if(isset($_REQUEST["search"]) && $_REQUEST["search"] != "")
{
$search = htmlspecialchars($_REQUEST["search"]);
$pagination->param = "&search=$search";

$pagination->rowCount("SELECT * FROM materias
WHERE nombre_materia LIKE '%$search%' OR claveSEP LIKE '%$search%'
OR credito LIKE '%$search%' OR cal_min LIKE '%$search%'");


$pagination->config(3, 5);

$sql = "SELECT * FROM materias
WHERE nombre_materia LIKE '%$search%' OR claveSEP LIKE '%$search%'
	OR credito LIKE '%$search%'
	OR cal_min LIKE '%$search%'
	ORDER BY id_materia ASC LIMIT $pagination->start_row, $pagination->max_rows";
$query = $conn->prepare($sql);
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

$sql = "SELECT * FROM materias
ORDER BY id_materia ASC LIMIT $pagination->start_row, $pagination->max_rows";

// $sql = "SELECT * FROM materias ORDER BY id_materia ASC LIMIT $pagination->start_row, $pagination->max_rows";
$query = $conn->prepare($sql);
$query->execute();
$model = array();

while($rows = $query->fetch())
{
    $model[] = $rows;
}
}
?>