<?php
include_once("../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

$query = mysql_query("SELECT * FROM grupo");
function grado(){
	global $query;
	while($row = mysql_fetch_array($query)){
	?>
	<option value="<?php echo $row['grado'];?>">
	<?php echo $row['grado']; ?>
	</option>

	<?php

}

}
function grupo(){
$query = mysql_query("SELECT * FROM grupo");

	while($row = mysql_fetch_array($query)){
	?>
	<option value="<?php echo $row['grupo'];?>">
	<?php echo $row['grupo']; ?>
	</option>

	<?php

}

}
?>