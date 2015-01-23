<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

$check = mysql_query("SELECT * FROM alumno order by id_alumno desc");
if(isset($_POST['nombre']) && isset($_POST['paterno']) && isset($_POST['materno']) && isset($_POST['matricula'])&& isset($_POST['curp']) && isset($_POST['telefono']) && isset($_POST['correo']) && isset($_POST['genero'])&& isset($_POST['nacimiento'])&& isset($_POST['edad'])&& isset($_POST['grado'])&& isset($_POST['grupo'])&& isset($_POST['estado'])&& isset($_POST['municipio'])&& isset($_POST['colonia'])&& isset($_POST['calle'])&& isset($_POST['interior'])&& isset($_POST['exterior'])&& isset($_POST['nacionalidad'])&& isset($_POST['civil'])&& isset($_POST['imagen']))
{
$nombre       = mysql_real_escape_string($_POST['nombre']);
$paterno      = mysql_real_escape_string($_POST['paterno']);
$materno      = mysql_real_escape_string($_POST['materno']);
$matricula    = mysql_real_escape_string($_POST['matricula']);
$curp         = mysql_real_escape_string($_POST['curp']);
$telefono     = mysql_real_escape_string($_POST['telefono']);
$correo       = mysql_real_escape_string($_POST['correo']);
$genero       = mysql_real_escape_string($_POST['genero']);
$nacimiento   = mysql_real_escape_string($_POST['nacimiento']);
$edad         = mysql_real_escape_string($_POST['edad']);
$grado        = mysql_real_escape_string($_POST['grado']);
$grupo        = mysql_real_escape_string($_POST['grupo']);
$estado       = mysql_real_escape_string($_POST['estado']);
$municipio    = mysql_real_escape_string($_POST['municipio']);
$colonia      = mysql_real_escape_string($_POST['colonia']);
$calle        = mysql_real_escape_string($_POST['calle']);
$interior     = mysql_real_escape_string($_POST['interior']);
$exterior     = mysql_real_escape_string($_POST['exterior'] );
$nacionalidad = mysql_real_escape_string($_POST['nacionalidad']);
$civil        = mysql_real_escape_string($_POST['civil']);
$ip           = mysql_real_escape_string($_SERVER['REMOTE_ADDR']);

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$checkuser = mysql_query("SELECT matricula FROM alumno WHERE matricula='".$matricula ."'");
$username_exist = mysql_num_rows($checkuser);
if ($username_exist>0) {
	header("location:../error.php");
	exit();
}else{

$query = mysql_query("INSERT INTO alumno(id_alumno,nombre,A_paterno,A_materno,matricula,curp,telefono,correo,genero,fecha_nacimiento,edad,grado,grupo,estado,municipio,colonia,calle,Ninterior,Nexterior,nacionalidad,estado_civil,fotografia,status,ip) values (null,'$nombre','$paterno','$materno','$matricula','$curp','$telefono','$correo','$genero','$nacimiento','$edad','$grado','$grupo','$estado','$municipio','$colonia','$calle','$interior','$exterior','$nacionalidad','$civil','".$rutaDestino."','activo','$ip')");
}
}

?>
=