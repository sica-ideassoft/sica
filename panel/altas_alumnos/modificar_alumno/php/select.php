<?php
include_once("../../../conexion/conexion.php");
$conn= new Conexion();
header('Content-Type: text/html; charset=UTF-8');
// $consulta = mysql_query("SELECT nombre FROM maestro");

$id = $_POST['id'];
$sqll1 = $conn->prepare("SELECT * FROM alumno where id_alumno = :id");
$sqll1->bindParam(':id',$id);
$sqll1->execute();
$rou1=$sqll1->fetch();

$id_grupo = $rou1['id_grupo'];

$sql1 = $conn->prepare("SELECT id_grupo,id_maestro,id_materia,grupo FROM grupos order by id_grupo=:id_grupo desc");
$sql1->bindParam(':id_grupo',$id_grupo);
$sql1->execute();
function grupo(){
	global $sql1;
	while($row1 =$sql1->fetch()){
	?>
	<option value="<?php echo $row1['id_grupo'];?>">
	<?php echo $row1['grupo'];?>
	</option>
	<?php
}
}
// ----------------------------------------

$estados = $rou1['estado'];
$sql3 = $conn->prepare("SELECT id_estado,nombre_estado FROM
	                   estados_mexico order by id_estado=:estado desc");
$sql3->bindParam(':estado',$estados);
$sql3->execute();
function estado(){
	global $sql3;
	while($row3 =$sql3->fetch()){
		?>
		<option value="<?php echo $row3['id_estado']; ?>"><?php echo utf8_encode($row3['nombre_estado']); ?></option>
		<?php
	}

}
// -----------------------------------------------------------

$civil = $rou1['estado_civil'];

$sqll =$conn->prepare("SELECT id_estado_civil,p_estado_civil FROM estado_civil  order by id_estado_civil=:civil desc");
$sqll->bindParam(':civil',$civil);
$sqll->execute();
function civil(){
	global $sqll;
	while($rows =$sqll->fetch()){
		?>

		<option value="<?php echo $rows['id_estado_civil']; ?>"><?php echo $rows['p_estado_civil'];?></option>
		<?php
	}

}
// ---------------------------------------------------

$genero = $rou1['genero'];

$sql4 =$conn->prepare("SELECT id_genero_persona,genero_create FROM genero order by id_genero_persona=:genero desc");
$sql4->bindParam(':genero',$genero);
$sql4->execute();
function genero(){
	global $sql4;
	while($row4 =$sql4->fetch()){
		?>

		<option value="<?php echo $row4['id_genero_persona']; ?>"><?php echo $row4['genero_create'];?></option>
		<?php
	}

}
// ------------------------------------------------------

$nacionalidad = $rou1['nacionalidad'];

$sql5 =$conn->prepare("SELECT id_nacionalidad,nacionalidad_create FROM nacionalidad order by id_nacionalidad=:nacionalidad desc");
$sql5->bindParam(':nacionalidad',$nacionalidad);
$sql5->execute();
function nacionalidad(){
	global $sql5;
	while($row5 =$sql5->fetch()){
		?>

		<option value="<?php echo $row5['id_nacionalidad']; ?>"><?php echo $row5['nacionalidad_create'];?></option>
		<?php
	}

}
// ------------------------------------------------------------------------
$status = $rou1['status'];

$sql6 =$conn->prepare("SELECT  id_status,status_create  FROM status order by id_status=:status desc");
$sql6->bindParam(':status',$status);
$sql6->execute();
function status(){
	global $sql6;
	while($row6 =$sql6->fetch()){
		?>
		<option value="<?php echo $row6['id_status']; ?>"><?php echo $row6['status_create'];?></option>
		<?php
	}

}

$edad = $rou1['edad'];

$sql7 =$conn->prepare("SELECT  id_edad,edad_create  FROM edad order by id_edad=:edad desc");
$sql7->bindParam(':edad',$edad);
$sql7->execute();
function edad(){
	global $sql7;
	while($row7 =$sql7->fetch()){
		?>
		<option value="<?php echo $row7['id_edad']; ?>"><?php echo utf8_encode($row7['edad_create']);?></option>
		<?php
	}

}



?>

