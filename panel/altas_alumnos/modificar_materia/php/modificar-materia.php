
<?php
  include_once("../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

$id = $_POST["id"];

$peticion=mysql_query("SELECT * FROM materias WHERE id_materia = '".$id."'");
$materia= mysql_fetch_array($peticion);

?>
