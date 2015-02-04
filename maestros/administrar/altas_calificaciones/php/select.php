<?php
include_once("../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

header('Content-Type: text/html; charset=UTF-8');
// $consulta = mysql_query("SELECT nombre FROM maestro");
$consulta = mysql_query("SELECT nombre FROM estados_mexico");

function estado(){
	global $consulta;
	while($row = mysql_fetch_array($consulta)){
		?>
		<option value="<?php echo utf8_encode($row['nombre']); ?>"><?php echo utf8_encode($row['nombre']); ?></option>
		<?php
	}

}

?>