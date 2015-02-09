<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

$check = mysql_query("SELECT * FROM modulos order by id_modulo desc");
if(isset($_POST['nombre']) && isset($_POST['modulo']) && isset($_POST['fecha']))
{
$nombre = mysql_real_escape_string($_POST['nombre']);
$modulo = mysql_real_escape_string($_POST['modulo']);
$fecha  = mysql_real_escape_string($_POST['fecha']);

$checkModulo = mysql_query("SELECT modulo_num FROM modulos WHERE modulo_num='".$modulo."'");
$moduloname_exist = mysql_num_rows($checkModulo);
if ($moduloname_exist>0) {
	header("location:../error.php");
	exit();
}else{

$query = mysql_query("INSERT INTO modulos(id_modulo,nombre,modulo_num,fecha) values (null,'$nombre','$modulo','$fecha')");
}
}

?>