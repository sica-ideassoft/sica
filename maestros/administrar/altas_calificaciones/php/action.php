<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

$id       = mysql_real_escape_string($_POST['id']);
$grupo  = mysql_real_escape_string($_POST['grupo']);
$credito  = mysql_real_escape_string($_POST['credito']);
$cal      = mysql_real_escape_string($_POST['cal']);

$query = mysql_query("INSERT INTO calificacion(id_calificacion,id_alumno,id_grupo,creditos,calificacion,acumulado) values (null,'$id','$grupo','$credito','$cal','2')");

// }

?>