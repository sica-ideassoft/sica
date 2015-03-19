<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();


$id = $_POST['id'];
$materia = $_POST["materia"];
$sqll1 = $conn->prepare("SELECT id_calificacion,id_alumno,id_materia,creditos,calificacion,id_tipo_evaluacion,acumulado  FROM calificacion where id_alumno = :id AND id_materia =:materia ");
$sqll1->bindParam(':id',$id);
$sqll1->bindParam(':materia',$materia);
$sqll1->execute();
$rou1=$sqll1->fetch();
$evalucion = $rou1['id_tipo_evaluacion'];


$ssql = $conn->prepare("SELECT  id_tipo_evaluacion,evaluacion,descripcion
	FROM tipo_evaluacion ORDER BY id_tipo_evaluacion = :evalucion desc");
$ssql->bindParam(':evalucion',$evalucion);
$ssql->execute();

function  tipo_evaluacion(){
	global $ssql;
	while($rows = $ssql->fetch()){
	?>
	<option value="<?php echo $rows['id_tipo_evaluacion'];?>"><?php echo $rows['evaluacion'];?></option>

	<?php
	}
}

 ?>