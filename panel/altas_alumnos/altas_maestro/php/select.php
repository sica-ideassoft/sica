<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();
header('Content-Type: text/html; charset=UTF-8');
// $consulta = mysql_query("SELECT nombre FROM maestro");
$sql = "SELECT id_estado,nombre_estado,codigo FROM estados_mexico";
$query = $conn->query($sql);
function estado(){
	global $query;
	while($row = $query->fetch()){
		?>
		<option value="<?php echo $row['id_estado']; ?>"><?php echo utf8_encode($row['nombre_estado']); ?></option>
		<?php
	}

}

$sql1 = "SELECT  id_genero_persona,genero_create  FROM genero";
$query1 = $conn->query($sql1);
function genero(){
	global $query1;
	while($row1 = $query1->fetch()){
		?>
		<option value="<?php echo $row1['id_genero_persona']; ?>"><?php echo $row1['genero_create']; ?></option>
		<?php
	}

}

$sql2 = "SELECT  id_estado_civil,p_estado_civil,descripcion  FROM estado_civil";
$query2 = $conn->query($sql2);
function civil(){
	global $query2;
	while($row2 = $query2->fetch()){
		?>
		<option value="<?php echo $row2['id_estado_civil']; ?>"><?php echo $row2['p_estado_civil']; ?></option>
		<?php
	}

}

$sql3 = "SELECT id_nacionalidad,nacionalidad_create  FROM nacionalidad";
$query3 = $conn->query($sql3);
function nacionalidad(){
	global $query3;
	while($row3 = $query3->fetch()){
		?>
		<option value="<?php echo $row3['id_nacionalidad']; ?>"><?php echo $row3['nacionalidad_create']; ?></option>
		<?php
	}

}



$sql4 = "SELECT  id_edad,edad_create  FROM edad";
$query4 = $conn->query($sql4);
function edad(){
	global $query4;
	while($row4 = $query4->fetch()){
		?>
		<option value="<?php echo $row4['id_edad']; ?>"><?php echo utf8_encode($row4['edad_create']); ?></option>
		<?php
	}

}
?>
