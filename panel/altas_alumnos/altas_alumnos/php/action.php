<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

$check = mysql_query("SELECT * FROM alumno order by id_alumno desc");
if(isset($_POST['nombre']) && isset($_POST['paterno']) && isset($_POST['materno']) && isset($_POST['matricula'])&& isset($_POST['curp']) && isset($_POST['telefono']) && isset($_POST['correo']) && isset($_POST['genero'])&& isset($_POST['nacimiento'])&& isset($_POST['edad'])&& isset($_POST['grado'])&& isset($_POST['grupo'])&& isset($_POST['estado'])&& isset($_POST['municipio'])&& isset($_POST['calle'])&& isset($_POST['nacionalidad'])&& isset($_POST['civil'])&& isset($_POST['imagen'])&& isset($_POST['status']))
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
$calle        = mysql_real_escape_string($_POST['calle']);
$nacionalidad = mysql_real_escape_string($_POST['nacionalidad']);
$civil        = mysql_real_escape_string($_POST['civil']);
$status       = mysql_real_escape_string($_POST['status']);
$ip           = mysql_real_escape_string($_SERVER['REMOTE_ADDR']);

$rutaEnServidor='../imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);



mysql_query("INSERT INTO alumno(id_alumno,nombre,A_paterno,A_materno,matricula,curp,telefono,correo,genero,fecha_nacimiento,edad,grado,grupo,estado,municipio,calle,nacionalidad,estado_civil,fotografia,status,ip) values (null,'$nombre','$paterno','$materno','$matricula','$curp','$telefono','$correo','$genero','$nacimiento','$edad','$grado','$grupo','$estado','$municipio','$calle','$nacionalidad','$civil','".$rutaDestino."','$status','$ip')");
}

?>