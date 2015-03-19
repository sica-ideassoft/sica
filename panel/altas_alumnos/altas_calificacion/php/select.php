<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$ssql = $conn->prepare("SELECT  id_tipo_evaluacion,evaluacion,descripcion
	FROM tipo_evaluacion");
$ssql->execute();

function  tipo_evaluacion(){
	global $ssql;
	while($rows = $ssql->fetch()){
	?>
	<option value="<?php echo $rows['id_tipo_evaluacion'];?>"><?php echo $rows['evaluacion'];?></option>

	<?php
	}
}

 ?>