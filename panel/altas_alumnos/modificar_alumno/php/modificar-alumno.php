
<?php
include_once("../conectar.php");
$conn = new DB;
$conn->conectar();

$id = $_GET["id"];

$peticion=mysql_query("SELECT * FROM alumno WHERE id_alumno = '".$id."'");
$alumno = mysql_fetch_array($peticion);

?>
