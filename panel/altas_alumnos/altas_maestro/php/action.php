<?php
include_once("conexion.php");
$conn = new DB();
$conn->conectar();


if(isset($_POST['nombre']) && isset($_POST['paterno']) && isset($_POST['materno'])&& isset($_POST['clavep'])&& isset($_POST['curp'])&& isset($_POST['telefono'])&& isset($_POST['correo'])&& isset($_POST['genero'])&& isset($_POST['edad'])&& isset($_POST['civil'])&& isset($_POST['nacimiento'])&& isset($_POST['estado'])&& isset($_POST['municipio'])&& isset($_POST['calle'])&& isset($_POST['nacionalidad'])&& isset($_POST['user'])&& isset($_POST['password']))
{
$nombre       = mysql_real_escape_string($_POST['nombre']);
$paterno      = mysql_real_escape_string($_POST['paterno']);
$materno      = mysql_real_escape_string($_POST['materno']);
$clavep       = mysql_real_escape_string($_POST['clavep']);
$curp         = mysql_real_escape_string($_POST['curp']);
$telefono     = mysql_real_escape_string($_POST['telefono']);
$correo       = mysql_real_escape_string($_POST['correo']);
$genero       = mysql_real_escape_string($_POST['genero']);
$edad         = mysql_real_escape_string($_POST['edad']);
$civil        = mysql_real_escape_string($_POST['civil']);
$nacimiento   = mysql_real_escape_string($_POST['nacimiento']);
$estado       = mysql_real_escape_string($_POST['estado']);
$municipio    = mysql_real_escape_string($_POST['municipio']);
$calle        = mysql_real_escape_string($_POST['calle']);
$nacionalidad = mysql_real_escape_string($_POST['nacionalidad']);
$user         = mysql_real_escape_string($_POST['user']);
$password     = mysql_real_escape_string($_POST['password']);
$ip           = mysql_real_escape_string($_SERVER['REMOTE_ADDR']);

$checkclave = mysql_query("SELECT clave FROM maestro WHERE clave='".$clavep."'");

$userclave_exist = mysql_num_rows($checkclave);

$checkuser = mysql_query("SELECT user FROM user_maestro WHERE user='".$user."'");
$username_exist = mysql_num_rows($checkuser);
if ($userclave_exist>0||$username_exist>0) {
	header("location:../error.php");
	exit();
}else{

$maestro = mysql_query("INSERT INTO maestro(id_maestro,nombre,A_paterno,A_materno,clave,curp,telefono,correo,genero,edad,estado_civil,fecha_nacimiento,Estado,municipio,calle,nacionalidad,ip) values (null,'$nombre','$paterno','$materno','$clavep','$curp','$telefono','$correo','$genero','$edad','$civil','$nacimiento','$estado','$municipio','$calle','$nacionalidad','$ip')");

$rs = mysql_query("SELECT MAX(id_maestro) AS id FROM maestro");
if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]);
}
$maestro = mysql_query("INSERT INTO user_maestro(id_login_maestro,id_maestro,user,password) values (null,'".$id."','".$user."','".$password."')");



	}


}
?>

