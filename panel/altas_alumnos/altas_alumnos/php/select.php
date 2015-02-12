<?php
 include_once("../../../conexion/conexion.php");
 $conn = new Conexion();
header('Content-Type: text/html; charset=UTF-8');

$sql2 = "SELECT id_estado,nombre_estado FROM estados_mexico";
$query2 = $conn->query($sql2);
function estado(){
	global $query2;
	while($row2 = $query2->fetch()){
		?>
		<option value="<?php echo $row2['id_estado']; ?>"><?php echo utf8_encode($row2['nombre_estado']); ?></option>
		<?php
	}

}

$sqll = "SELECT id_estado_civil,p_estado_civil FROM estado_civil";
$querys = $conn->query($sqll);
function civil(){
	global $querys ;
	while($rows = $querys ->fetch()){
		?>
		<option value="<?php echo $rows['id_estado_civil']; ?>"><?php echo $rows['p_estado_civil']; ?></option>
		<?php
	}

}

$sql1 = "SELECT  id_genero_persona,genero_create  FROM genero";
$query1 = $conn->query($sql1);
function genero(){
	global $query1;
	while($row1 = $query1 ->fetch()){
		?>
		<option value="<?php echo $row1['id_genero_persona']; ?>"><?php echo $row1['genero_create']; ?></option>
		<?php
	}

}
$sql = "SELECT id_grupo,id_maestro,id_materia,grupo FROM grupos";
$query = $conn-> query($sql);
function grupo(){
	global $query;
	while($row = $query->fetch()){
	?>
	<option value="<?php echo $row['id_grupo'];?>">
	<?php echo $row['grupo']; ?>
	</option>

	<?php
}
}


$sql4 = "SELECT  id_nacionalidad,nacionalidad_create  FROM nacionalidad";
$query4 = $conn-> query($sql4);
function nacionalidad(){
	global $query4;
	while($row4 = $query4->fetch()){
	?>
	<option value="<?php echo $row4['id_nacionalidad'];?>">
	<?php echo $row4['nacionalidad_create']; ?>
	</option>

	<?php
}
}


$sql3 = "SELECT id_edad,edad_create  FROM edad";
$query3 = $conn-> query($sql3);
function edad(){
	global $query3;
	while($row3 = $query3->fetch()){
	?>
	<option value="<?php echo $row3['id_edad'];?>">
	<?php echo utf8_encode($row3['edad_create']); ?>
	</option>
	<?php
}
}
?>