<?php
require("php/conexion.php");
require("funciones.php");

$idempresa = getParam($_GET["id"], "-1");
$action = getParam($_GET["action"], "");

if ($action == "del") {
	$sql = "DELETE FROM alumno WHERE id_alumno = ".sqlValue($idempresa, "int");
	mysql_query($sql, $conexion);
	header("location:modificar_alumno.php");
}
?>