
<?php
include_once("../conectar.php");
$conn = new DB;
$conn->conectar();

$id = $_GET["id"];

$peticion=mysql_query("SELECT * FROM materias WHERE id_materia = '".$id."'");
$materia= mysql_fetch_array($peticion);

?>
