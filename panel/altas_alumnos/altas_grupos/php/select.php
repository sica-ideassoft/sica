<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$master = "SELECT * FROM maestro m
INNER JOIN user_maestro u ON m.id_maestro =  u.id_maestro";
$querys = $conn->query($master);

function maestro(){
	global $querys;
	while($row = $querys->fetch()){
		?>
		<option value="<?php echo $row['id_maestro']; ?>"><?php echo $row['nombre']; ?></option>
		<?php
	}

}

$modulo = "SELECT * FROM materias";
$modulos = $conn->query($modulo);
function modulo(){
	global $modulos;
	while($row =$modulos->fetch()){
		?>
		<option value="<?php echo $row['id_materia']; ?>"><?php echo $row['nombre_materia']; ?></option>
		<?php
	}

}

$sqll ="SELECT id_create_grupo,create_grupo,create_grado,descripcion  FROM create_grupo";

$query = $conn->query($sqll);
function grado(){
	global $query;
	while($row =$query->fetch()){
	?>
	<option value="<?php echo $row['id_create_grupo'];?>">
	<?php echo $row['create_grado']."".$row['create_grupo']; ?>
	</option>

	<?php

}
}

?>