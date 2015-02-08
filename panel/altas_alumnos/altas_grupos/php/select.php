<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

// $consulta = mysql_query("SELECT nombre FROM maestro");
$sql = "SELECT * FROM maestro m INNER JOIN user_maestro u ON m.id_maestro =  u.id_maestro";
$query = $conn->query($sql);
function maestro(){
	global $query;
	while($row = $query->fetch()){
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

?>