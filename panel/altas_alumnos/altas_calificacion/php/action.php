<?php
include_once("conexion.php");
$conn = new DB();
$conn->conectar();
$check = mysql_query("SELECT * FROM materias order by id_materia desc");
if(isset($_POST['modulo']) && isset($_POST['sep']) && isset($_POST['nombre']) && isset($_POST['profesor']) && isset($_POST['fecha1']) && isset($_POST['fecha2'])&& isset($_POST['creditos']) && isset($_POST['calificacion']))
{

$modulo       = mysql_real_escape_string($_POST['modulo']);
$sep          = mysql_real_escape_string($_POST['sep']);
$nombre       = mysql_real_escape_string($_POST['nombre']);
$profesor     = mysql_real_escape_string($_POST['profesor']);
$fecha1       = mysql_real_escape_string($_POST['fecha1']);
$fecha2       = mysql_real_escape_string($_POST['fecha2']);
$creditos     = mysql_real_escape_string($_POST['creditos']);
$calificacion = mysql_real_escape_string($_POST['calificacion']);
$ip           = mysql_real_escape_string($_SERVER['REMOTE_ADDR']);



mysql_query("INSERT INTO materias(id_materia,claveSEP,modulo,nombre,profesor,fecha_inicio,fecha_fin,credito,cal_min,ip) values (null,'$modulo','$sep','$nombre','$profesor','$fecha1','$fecha2','$creditos','$calificacion','$ip')");

$fetch= mysql_query("SELECT *  FROM materias order by id_materia desc");
$row=mysql_fetch_array($fetch);
}
?>

<link rel="stylesheet" href="../css/mensajes.css">
<div class="showbox"> <?php echo $row['nombre'];
echo "<hr>";
?> </div>

