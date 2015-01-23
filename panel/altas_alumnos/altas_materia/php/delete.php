<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

$id = mysql_real_escape_string($_POST["id"]);

	$sql = "DELETE FROM materias WHERE id_materia = '".$id."'";
	mysql_query($sql);
	header("location:../calendarios.php");

?>