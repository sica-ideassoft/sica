<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

$id = mysql_real_escape_string($_POST["id"]);

	$sql = "DELETE FROM modulos WHERE id_modulo = '".$id."'";
	mysql_query($sql);
	header("location:../calendarios.php");

?>