<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$id = $_POST['id'];
$sqll=$conn->prepare("SELECT  id_grupo,id_maestro,id_materia,id_create_grupo FROM grupos where id_grupo = :id");
$sqll->bindParam(':id',$id);
$sqll->execute();
$row1 = $sqll->fetch();
$maestro = $row1['id_maestro'];

$sql1 = $conn->prepare("SELECT * FROM maestro m INNER JOIN user_maestro u ON m.id_maestro =  u.id_maestro  order by m.id_maestro=:maestro desc");
$sql1->bindParam(':maestro',$maestro);
$sql1->execute();
function maestro(){
	global $sql1;
	while($rows =$sql1->fetch()){
		?>
		<option value="<?php echo $rows['id_maestro']; ?>"><?php echo $rows['nombre']; ?></option>
		<?php
	}

}
$materia = $row1['id_materia'];


$modulo =$conn->prepare("SELECT g.id_materia,m.id_materia,m.nombre_materia FROM
	materias m
	INNER JOIN grupos g ON g.id_materia = m.id_materia
	order by m.id_materia =:materia desc");

$modulo->bindParam(':materia',$materia);
$modulo->execute();

function materia(){
	global $modulo;
	while($row2 = $modulo->fetch()){
		?>
		<option value="<?php echo $row2['id_materia']; ?>"><?php echo $row2['nombre_materia']; ?></option>
		<?php
	}

}

$grupo ="SELECT * FROM create_grupo";
$grupos= $conn->query($grupo);
function grupo(){
	global $grupos;
	while($rows = $grupos->fetch()){
		?>
		<option value="<?php echo $rows['id_create_grupo']; ?>"><?php echo $rows['create_grado']."".$rows['create_grupo']; ?></option>
		<?php
	}

}







?>