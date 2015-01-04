
<?php
include_once("../conectar.php");
$conn = new DB;
$conn->conectar();

$id = $_GET["id"];

$peticion=mysql_query("SELECT * FROM maestro WHERE id_maestro = '".$id."'");
$alumno = mysql_fetch_array($peticion);

?>
