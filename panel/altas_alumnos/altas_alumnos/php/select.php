<?php
 include_once("../../../conexion/conexion.php");
 $conn = new Conexion();
header('Content-Type: text/html; charset=UTF-8');

$sql = "SELECT nombre FROM estados_mexico";

$query = $conn->query($sql);
function estado(){
	global $query;
	while($row = $query->fetch()){
		?>
		<option value="<?php echo utf8_encode($row['nombre']); ?>"><?php echo utf8_encode($row['nombre']); ?></option>
		<?php
	}

}

?>