<?php
  include_once("../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

// $consulta = mysql_query("SELECT nombre FROM maestro");
$consulta = mysql_query("SELECT *
FROM maestro m
INNER JOIN user_maestro u ON m.id_maestro =  u.id_maestro");

function maestro(){
	global $consulta;
	while($row = mysql_fetch_array($consulta)){
		?>
		<option value="<?php echo $row['user']; ?>"><?php echo $row['nombre']; ?></option>
		<?php
	}

}
$modulo = mysql_query("SELECT nombre FROM modulos");
function modulo(){
	global $modulo;
	while($row = mysql_fetch_array($modulo)){
		?>
		<option value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></option>
		<?php
	}

}




?>