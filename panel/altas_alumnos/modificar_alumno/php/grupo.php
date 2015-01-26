<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();



$query = mysql_query("SELECT id_grupo,id_maestro,id_materia,grado,grupo FROM grupos");
function grupo(){
	global $query;
	while($row = mysql_fetch_array($query)){
	?>
	<option value="<?php echo $row['id_grupo'];?>">
	<?php echo $row['grado']."-".$row['grupo'] ?>
	</option>

	<?php

}


}
?>