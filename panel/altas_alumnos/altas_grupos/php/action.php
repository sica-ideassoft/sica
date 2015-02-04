<?php
include_once("../../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

$check = mysql_query("SELECT * FROM grupos order by id_grupo desc");

$maestro  = mysql_real_escape_string($_POST['maestro']);
$materia  = mysql_real_escape_string($_POST['materia']);
$grupos   = mysql_real_escape_string($_POST['grupos']);


// $checMateria = mysql_query("SELECT id_materia,grupo FROM grupos where
// 	id_materia='".$materia."'");

// $MateriaName_exist = mysql_num_rows($checMateria);
$checGrupo = mysql_query("SELECT id_materia,grupo FROM grupos where
	grupo='".$grupos."'");

$GrupoName_exist = mysql_num_rows($checGrupo);

if ($GrupoName_exist>0) {
	header("location:../error.php");
	exit();
}else{

$query = mysql_query("INSERT INTO grupos (id_grupo,id_maestro,id_materia,grupo) values (null,'$maestro','$materia','$grupos')");
}


?>