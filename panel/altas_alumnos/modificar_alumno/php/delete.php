<?php
  include_once("../../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

	$id = mysql_real_escape_string($_GET["id"]);

	$sql = "DELETE FROM alumno WHERE id_alumno = ".$id;
	mysql_query($sql);
	header("location:../modificar_alumno.php");


 ?>