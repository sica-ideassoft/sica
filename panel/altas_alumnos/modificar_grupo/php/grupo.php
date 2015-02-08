<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();
$sql ="SELECT * FROM create_grupo";
$query = $conn->query($sql);

function grado(){
	global $query;
	while($row =$query->fetch()){
	?>
	<option value="<?php echo $row['create_grado'];?>">
	<?php echo $row['create_grado']; ?>
	</option>
	<?php

}
}
function grupo(){
global $conn;
$sqll ="SELECT * FROM create_grupo";
$querys = $conn->query($sqll);

	while($row = $querys->fetch()){
	?>
	<option value="<?php echo $row['create_grupo'];?>">
	<?php echo $row['create_grupo']; ?>
	</option>

	<?php

}

}
?>