<?php
include_once("../../../conexion/conexion.php");
$conn= new Conexion();
header('Content-Type: text/html; charset=UTF-8');
// $consulta = mysql_query("SELECT nombre FROM maestro");
$sql = "SELECT nombre FROM estados_mexico order by id_estado";
$query = $conn->query($sql);

function estado(){
	global $query;
	while($row =$query->fetch()){
		?>
		<option value="<?php echo utf8_encode($row['nombre']); ?>"><?php echo utf8_encode($row['nombre']); ?></option>
		<?php
	}

}

$sqll = "SELECT id_estado_civil,p_estado_civil FROM estado_civil";
$querys = $conn->query($sqll);
function civil(){
	global $querys;
	while($rows =$querys->fetch()){
		?>
		<option value="<?php echo $rows['id_estado_civil']; ?>"><?php echo $rows['p_estado_civil']; ?></option>
		<?php
	}

}
?>