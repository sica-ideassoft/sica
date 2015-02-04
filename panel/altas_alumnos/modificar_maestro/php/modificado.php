<?php
include_once("../../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

$id           = mysql_real_escape_string($_POST["id"]);
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
$interior     = mysql_real_escape_string($_POST['interior']);
$exterior     = mysql_real_escape_string($_POST['exterior']);
$nacionalidad = mysql_real_escape_string($_POST['nacionalidad']);
$user         = mysql_real_escape_string($_POST['user']);
$password     = mysql_real_escape_string($_POST['password']);


$sql = "UPDATE maestro set nombre = '".$nombre."',A_paterno = '".$paterno."',A_materno='".$materno."',clave='".$clavep."',curp='".$curp."',telefono='".$telefono."',correo='".$correo."',genero='".$genero."',edad='".$edad."',estado_civil='".$civil."',fecha_nacimiento='".$nacimiento."',Estado='".$estado."',municipio='".$municipio."',calle='".$calle."',Ninterior='".$interior."',Nexterior='".$exterior."',nacionalidad='".$nacionalidad."' WHERE id_maestro= '".$id."'";


$ssql = "UPDATE user_maestro set user = '".$user."',password = '".$password."' WHERE id_maestro= '".$id."'";

$maestro = mysql_query($sql);
$user = mysql_query($ssql);
 ?>