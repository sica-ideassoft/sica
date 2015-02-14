<link rel="stylesheet" href="css/mostrar_alumnos.css">
<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$materia = $_POST["materia"];
$creditos = $_POST["credito"];
$min_materia = $_POST['cal_min'];
$id = $_POST["id"];
$sql = $conn->prepare("SELECT
	a.id_alumno,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.curp,a.telefono,a.correo,a.genero,a.fecha_nacimiento,a.edad,a.estado,a.municipio,a.colonia,a.calle,a.Ninterior,a.Nexterior,a.nacionalidad,a.estado_civil,a.fotografia,a.status,
	g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
	m.id_materia,m.claveSEP,m.nombre_materia,m.fecha_inicio,m.fecha_fin,m.credito,m.cal_min
	FROM alumno a
	INNER JOIN grupos g ON g.id_create_grupo = a.id_create_grupo
	INNER JOIN materias m ON m.id_materia = g.id_materia
	WHERE a.id_alumno = :id");
$sql->bindParam(':id',$id);
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
</table>

<script>
var id = "<?php echo $id; ?>" ;
var materia = "<?php echo $materia; ?>" ;
var creditos = "<?php echo $creditos; ?>" ;
var min_materia = "<?php echo $min_materia; ?>" ;

</script>

<form action="">
<table class="history">
<tr>
	<td><label for="">Calificación:</label></td>
	<td><label for="">Tipo de Evaluación</label></td>
</tr>
<tr>


	<td><input type="text" class="cal" name='cal' id='cal' placeholder='cal...'></td>
	<td>
	<select class="eval" name='eval' id='eval'>
		<option value="ORD">ORD</option>
		<option value="EXT-1">EXT-1</option>
	</select>

</tr>

</table>
