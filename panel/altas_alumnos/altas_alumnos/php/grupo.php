<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$sql = "SELECT id_grupo,id_maestro,id_materia,grupo FROM grupos";
$query = $conn-> query($sql);
function grupo(){
	global $query;
	while($row = $query->fetch()){
	?>
	<option value="<?php echo $row['id_grupo'];?>">
	<?php echo $row['grupo']; ?>
	</option>

	<?php
}
}
?>