<?php
include_once("../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();



$query = mysql_query("SELECT id_grupo,id_maestro,id_materia,grupo FROM grupos");
function grupo(){
	global $query;
	while($row = mysql_fetch_array($query)){
	?>
	<option value="<?php echo $row['id_grupo'];?>">
	<?php echo $row['grupo']; ?>
	</option>

	<?php

}


}
?>