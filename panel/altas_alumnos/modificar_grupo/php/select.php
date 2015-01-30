<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

// $consulta = mysql_query("SELECT nombre FROM maestro");
$consulta = mysql_query("SELECT *
FROM maestro m
INNER JOIN user_maestro u ON m.id_maestro =  u.id_maestro");

function maestro(){
	global $consulta;
	while($row = mysql_fetch_array($consulta)){
		?>
		<option value="<?php echo $row['id_maestro']; ?>"><?php echo $row['nombre']; ?></option>
		<?php
	}

}

$modulo = mysql_query("SELECT * FROM materias");
function materia(){
	global $modulo;
	while($row = mysql_fetch_array($modulo)){
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