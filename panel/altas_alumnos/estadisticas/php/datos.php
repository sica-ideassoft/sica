<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();


$sql = $conn->prepare("SELECT id_alumno FROM alumno");
$sql->bindParam(':id',$id);
$sql->execute();
$count = $sql->rowCount();

$sqll = $conn->prepare("SELECT id_materia FROM materias");
$sqll->bindParam(':id',$id);
$sqll->execute();
$count_materia = $sqll->rowCount();

$sql1 = $conn->prepare("SELECT id_grupo FROM grupos");
$sql1->bindParam(':id',$id);
$sql1->execute();
$count_grupo = $sql1->rowCount();

$sql2 = $conn->prepare("SELECT id_maestro FROM maestro");
$sql2->bindParam(':id',$id);
$sql2->execute();
$count_maestro = $sql2->rowCount();
?>
<div class="total-alumno">
<div class="dato">
	<p>Total de alumnos</p>
</div>
<div class="info">
<p><?php echo "'".$count."'"; ?></p>
</div>
</div>

<div class="total-alumno">
<div class="dato">
	<p>Total de materias</p>
</div>
<div class="info">
<p><?php echo "'".$count_materia."'"; ?></p>
</div>
</div>

<div class="total-alumno">
<div class="dato">
	<p>Total grupos</p>
</div>
<div class="info">
<p><?php echo "'".$count_grupo."'";  ?></p>
</div>
</div>

<div class="total-alumno">
<div class="dato">
	<p>Total maestros</p>
</div>
<div class="info">
<p><?php echo "'".$count_maestro."'";  ?></p>
</div>
</div>