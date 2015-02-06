<?php
include_once("../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();


$query = mysql_query("SELECT * FROM create_grupo");
function grado(){
	global $query;
	while($row = mysql_fetch_array($query)){
	?>

	<option value="<?php echo $row['create_grado'];?>">
	<?php echo $row['create_grado']; ?>
	</option>

	<?php

}

}
function grupo(){
$query = mysql_query("SELECT * FROM create_grupo");

	while($row = mysql_fetch_array($query)){
	?>
	<option value="<?php echo $row['create_grupo'];?>">
	<?php echo $row['create_grupo']; ?>
	</option>

	<?php

}

}
?>