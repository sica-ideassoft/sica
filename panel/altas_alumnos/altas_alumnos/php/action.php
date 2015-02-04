<?php
include_once("../../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

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



  $fname = $_FILES["file"]["name"];
   move_uploaded_file($_FILES["file"]["tmp_name"],
  "upload/" . $_FILES["file"]["name"]);




$checkuser = mysql_query("SELECT matricula FROM alumno WHERE matricula='".$matricula ."'");
$username_exist = mysql_num_rows($checkuser);
if ($username_exist>0) {
	header("location:../error.php");
	exit();
}else{
$query = mysql_query("INSERT INTO alumno(id_alumno,id_grupo,nombre_alumno,A_paterno_alumno,A_materno_alumno,matricula,curp,telefono,correo,genero,fecha_nacimiento,edad,estado,municipio,colonia,calle,Ninterior,Nexterior,nacionalidad,estado_civil,password,fotografia,status,ip) values (null,'$grupo','$nombre','$paterno','$materno','$matricula','$curp','$telefono','$correo','$genero','$nacimiento','$edad','$estado','$municipio','$colonia','$calle','$interior','$exterior','$nacionalidad','$civil','sica-alumno','$fname','activo','$ip')");
}
// }

?>