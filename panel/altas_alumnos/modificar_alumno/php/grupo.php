<?php
include_once("../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

$query = mysql_query("SELECT
	g.id_grupo,g.id_maestro,g.id_materia,g.grupo,
	id_create_grupo 	create_grado 	create_grupo 	descripcion

	FROM grupos");
function grupo(){
	global $query;
	while($row = mysql_fetch_array($query)){
	?>
	<option value="<?php echo $row['id_grupo'];?>">
	<?php echo $row['grupo'];?>
	</option>

	<?php

}


}
?>