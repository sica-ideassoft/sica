<?php
include_once("conexion.php");
$conn = new DB();
$conn->conectar();

$check = mysql_query("SELECT * FROM maestro order by id_maestro desc");
if(isset($_POST['nombre']) && isset($_POST['paterno']) && isset($_POST['materno'])&& isset($_POST['curp'])&& isset($_POST['telefono'])&& isset($_POST['correo'])&& isset($_POST['genero'])&& isset($_POST['edad'])&& isset($_POST['civil'])&& isset($_POST['nacimiento'])&& isset($_POST['estado'])&& isset($_POST['municipio'])&& isset($_POST['calle'])&& isset($_POST['nacionalidad']))
{
$nombre       = mysql_real_escape_string($_POST['nombre']);
$paterno      = mysql_real_escape_string($_POST['paterno']);
$materno      = mysql_real_escape_string($_POST['materno']);
$curp      = mysql_real_escape_string($_POST['curp']);
$telefono      = mysql_real_escape_string($_POST['telefono']);
$correo      = mysql_real_escape_string($_POST['correo']);
$genero      = mysql_real_escape_string($_POST['genero']);
$edad      = mysql_real_escape_string($_POST['edad']);
$civil      = mysql_real_escape_string($_POST['civil']);
$nacimiento      = mysql_real_escape_string($_POST['nacimiento']);
$estado      = mysql_real_escape_string($_POST['estado']);
$municipio      = mysql_real_escape_string($_POST['municipio']);
$calle      = mysql_real_escape_string($_POST['calle']);
$nacionalidad      = mysql_real_escape_string($_POST['nacionalidad']);
$ip           = mysql_real_escape_string($_SERVER['REMOTE_ADDR']);


mysql_query("INSERT INTO maestro(id_maestro,nombre,A_paterno,A_materno,curp,telefono,correo,genero,edad,estado_civil,fecha_nacimiento,Estado,municipio,calle,nacionalidad,ip) values (null,'$nombre','$paterno','$materno','$curp','$telefono','$correo','$genero','$edad','$civil','$nacimiento','$estado','$municipio','$calle','$nacionalidad','$ip')");

$fetch= mysql_query("SELECT * FROM maestro order by id_maestro desc");

$row=mysql_fetch_array($fetch);
}
?>

<link rel="stylesheet" href="../css/mensajes.css">
<div class="showbox"> <?php echo $row['nombre']." ".$row['A_paterno']." ".$row['A_materno'];
echo "<hr>";
?> </div>

