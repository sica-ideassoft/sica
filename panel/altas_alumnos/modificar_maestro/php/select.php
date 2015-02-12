<?php
include_once("../../../conexion/conexion.php");
$conn= new Conexion();
header('Content-Type: text/html; charset=UTF-8');
// $consulta = mysql_query("SELECT nombre FROM maestro");

$id = $_POST['id'];
$sqll1 = $conn->prepare("SELECT * FROM maestro where id_maestro = :id");
$sqll1->bindParam(':id',$id);
$sqll1->execute();
$rou1=$sqll1->fetch();

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

// ----------------------------------------

$estados = $rou1['Estado'];
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
// --------------------------------------------------

$nacionalidad = $rou1['nacionalidad'];

$sqll4 =$conn->prepare("SELECT id_nacionalidad,nacionalidad_create FROM nacionalidad  order by id_nacionalidad=:nacionalidad desc");
$sqll4->bindParam(':nacionalidad',$nacionalidad);
$sqll4->execute();
function nacionalidad(){
	global $sqll4;
	while($rows4 =$sqll4->fetch()){
		?>
		<option value="<?php echo $rows4['id_nacionalidad']; ?>"><?php echo $rows4['nacionalidad_create'];?></option>
		<?php
	}

}

?>

