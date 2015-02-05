<?php
include_once("../../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

$id       = mysql_real_escape_string($_POST['id']);
$materia  = mysql_real_escape_string($_POST['materia']);
$credito  = mysql_real_escape_string($_POST['credito']);
$cal      = mysql_real_escape_string($_POST['cal']);
$eval     = mysql_real_escape_string($_POST['eval']);



// $checkuser = mysql_query("SELECT user FROM calificacion WHERE user='".$id."'");
// $username_exist = mysql_num_rows($checkuser);
// if ($userclave_exist>0||$username_exist>0) {
// 	header("location:../error.php");
// 	exit();
// }else{
$query = mysql_query("INSERT INTO calificacion(id_calificacion,id_alumno,id_materia,creditos,calificacion,Tipo_evaluacion,acumulado) values (null,'$id','$materia','$credito','$cal','$eval','2')");
// }
// }

?>