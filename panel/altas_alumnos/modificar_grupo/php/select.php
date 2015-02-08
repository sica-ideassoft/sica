<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$sql = "SELECT * FROM maestro m INNER JOIN user_maestro u ON m.id_maestro =  u.id_maestro";
$query = $conn->query($sql);

function maestro(){

	global $query;
	while($row =$query->fetch()){
		?>
		<option value="<?php echo $row['id_maestro']; ?>"><?php echo $row['nombre']; ?></option>
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
$grado = mysql_query("SELECT * FROM create_grupo");
function grado(){
	global $grado;
	while($row = mysql_fetch_array($grado)){
		?>
<option value="<?php echo $row['create_grado'];?>">
<?php echo $row['create_grado'];?></option>
		<?php
	}
}

$grupo = mysql_query("SELECT * FROM create_grupo");
function grupo(){
	global $grupo;
	while($row = mysql_fetch_array($grupo)){
		?>
<option value="<?php echo $row['create_grupo'];?>">
<?php echo $row['create_grupo'];?></option>
		<?php
	}
}





?>