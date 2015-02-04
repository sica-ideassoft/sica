
<?php
include_once("../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

$id = $_POST["id"];

$peticion=mysql_query("SELECT * FROM maestro WHERE id_maestro = '".$id."'");

$alumno = mysql_fetch_array($peticion);

$peticion_user=mysql_query("SELECT * FROM user_maestro WHERE id_maestro = '".$id."'");
$maestro_user = mysql_fetch_array($peticion_user);

?>
