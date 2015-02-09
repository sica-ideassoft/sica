<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$sql = "SELECT * FROM maestro m INNER JOIN user_maestro u ON m.id_maestro =  u.id_maestro";
$query = $conn->query($sql);
function maestro(){
	global $query;
	while($rows =$query->fetch()){
		?>
		<option value="<?php echo $rows['id_maestro']; ?>"><?php echo $rows['nombre']; ?></option>
		<?php
	}

}

$modulo ="SELECT * FROM materias";
$modulos= $conn->query($modulo);
function materia(){
	global $modulos;
	while($row = $modulos->fetch()){
		?>
		<option value="<?php echo $row['id_materia']; ?>"><?php echo $row['nombre_materia']; ?></option>
		<?php
	}

}

$grado ="SELECT * FROM create_grupo";
$grados= $conn->query($grado);
function grado(){
	global $grados;
	while($rows = $grados->fetch()){
		?>
		<option value="<?php echo $rows['create_grado']; ?>"><?php echo $rows['create_grado']; ?></option>
		<?php
	}

}

$grupo ="SELECT * FROM create_grupo";
$grupos= $conn->query($grupo);
function grupo(){
	global $grupos;
	while($rows = $grupos->fetch()){
		?>
		<option value="<?php echo $rows['create_grupo']; ?>"><?php echo $rows['create_grupo']; ?></option>
		<?php
	}

}







?>