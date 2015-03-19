<link rel="stylesheet" href="css/mostrar_alumnos.css">
<?php
include_once("php/select.php");
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$materia = $_POST["materia"];
$creditos = $_POST["credito"];
$min_materia = $_POST['cal_min'];


$id = $_POST["id"];
$sql = $conn->prepare("SELECT
	a.id_alumno,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.curp,a.telefono,a.correo,a.genero,a.fecha_nacimiento,a.edad,a.estado,a.municipio,a.colonia,a.calle,a.Ninterior,a.Nexterior,a.nacionalidad,a.estado_civil,a.fotografia,a.status,
	g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
	m.id_materia,m.claveSEP,m.nombre_materia,m.fecha_inicio,m.fecha_fin,m.credito,m.cal_min,
	o.id_maestro,o.nombre,
	n.id_calificacion,n.id_alumno,n.id_materia,n.creditos,n.calificacion,n.id_tipo_evaluacion,n.acumulado
	FROM alumno a
	INNER JOIN grupos g ON g.id_create_grupo = a.id_create_grupo
	INNER JOIN maestro o ON o.id_maestro = g.id_maestro
	INNER JOIN calificacion n ON n.id_alumno = a.id_alumno
	INNER JOIN materias m ON m.id_materia = g.id_materia AND m.id_materia = :materia
	WHERE a.id_alumno = :id");
$sql->bindParam(':id',$id);
$sql->bindParam(':materia',$materia);
$sql->execute();

$row = $sql->fetch();
$nombre = $row['nombre_alumno'];

?>
<table class="tabla-mostrar">
<tr>
	<td class="dato"><label for="">Nombre:</label></td>
	<td class="dato"><label for="">A paterno:</label></td>
	<td class="dato"><label for="">A materno:</label></td>
	<td class="dato"><label for="">Matricula:</label></td>
</tr>
	<td><?php echo $row['nombre_alumno']; ?></td>
	<td><?php echo $row['A_paterno_alumno']; ?></td>
	<td><?php echo $row['A_materno_alumno']; ?></td>
	<td><?php echo $row['matricula']; ?></td>

</tr>
<tr>
	<td class="dato"><label for="">Profesor:</label></td>
	<td class="dato"><label for="">Matería:</label></td>
	<td class="dato"><label for="">Creditos:</label></td>
	<td class="dato"><label for="">Cal. minima:</label></td>
</tr>
<tr>
	<td><?php echo $row['nombre']; ?></td>
	<td><?php echo $row['nombre_materia']; ?></td>
	<td><?php echo $row['credito']; ?></td>
	<td><?php echo $row['cal_min']; ?></td>
</tr>
</table>

<script>
var id = "<?php echo $id; ?>" ;
var materia = "<?php echo $materia; ?>" ;
var creditos = "<?php echo $creditos; ?>" ;
var min_materia = "<?php echo $min_materia; ?>" ;

</script>

<div class="content-history">
<form action="">

<table class="history">
<tr>
	<td><label for="">Calificación:</label></td>
	<td><label for="">Tipo de Evaluación</label></td>
</tr>
<tr>


	<td><input type="text" class="cal" name='cal' id='cal' placeholder='cal...'  value="<?php echo $row['calificacion'];?>"></td>
	<td>
	<select class="eval" name='eval' id='eval'>
		<?php
		tipo_evaluacion();
		 ?>
	</select>

</tr>

</table>
</div>