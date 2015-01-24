<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

$check = mysql_query("SELECT * FROM grupos order by id_grupo desc");
if(isset($_POST['maestro']) && isset($_POST['materia']) && isset($_POST['grado'])&& isset($_POST['grupo']))
{
$maestro  = mysql_real_escape_string($_POST['maestro']);
$materia  = mysql_real_escape_string($_POST['materia']);
$grado    = mysql_real_escape_string($_POST['grado']);
$grupo    = mysql_real_escape_string($_POST['grupo']);


$checgrupo = mysql_query("SELECT id_materia,grado,grupo FROM grupos where
	id_materia='".$materia."'");

$gruponame_exist = mysql_num_rows($checgrupo);
if ($gruponame_exist>0) {
	header("location:../error.php");
	exit();
}else{

$query = mysql_query("INSERT INTO grupos (id_grupo,id_maestro,id_materia,grado,grupo) values (null,'$maestro','$materia','$grado','$grupo')");
}
}

?>