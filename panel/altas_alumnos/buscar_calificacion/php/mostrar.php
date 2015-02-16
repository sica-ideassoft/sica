<link rel="stylesheet" href="css/mostrar_alumnos.css">
<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$sql = $conn->prepare("SELECT m.id_materia,m.claveSEP,m.nombre_materia,
g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
o.id_maestro,o.nombre,
a.id_alumno,a.matricula,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,
u.id_login_maestro,u.id_maestro,u.user,
c.id_create_grupo,c.create_grupo,c.create_grado,
n.id_calificacion,n.id_alumno,n.id_materia,n.creditos,n.calificacion,n.id_tipo_evaluacion,n.acumulado,
t.id_tipo_evaluacion,t.evaluacion
FROM materias m
INNER JOIN grupos g       ON g.id_materia = m.id_materia
INNER JOIN create_grupo c ON c.id_create_grupo = g.id_create_grupo
INNER JOIN maestro o      ON o.id_maestro = g.id_maestro
INNER JOIN alumno  a      ON a.id_create_grupo   = g.id_create_grupo
INNER JOIN user_maestro u ON u.id_maestro = o.id_maestro
INNER JOIN calificacion n ON n.id_alumno = a.id_alumno
INNER JOIN tipo_evaluacion t ON t.id_tipo_evaluacion = n.id_tipo_evaluacion

WHERE a.id_alumno = :id");
$sql->bindParam(':id',$_POST["id"]);
$sql->execute();

$row = $sql->fetch();
$nombre = $row['nombre'];
?>
<table class="tabla-mostrar">
<tr>
	<td class="dato"><label for="">Materia:</label></td>
	<td class="dato"><label for="">Profesor:</label></td>
	<td class="dato"><label for="">grado:</label></td>
	<td class="dato"><label for="">grupo:</label></td>
</tr>
	<td><?php echo $row['nombre_materia']; ?></td>
	<td><?php echo $row['nombre']; ?></td>
	<td><?php echo $row['create_grado']; ?></td>
	<td><?php echo $row['create_grupo']; ?></td>
</tr>
<tr>


	<td class="dato"><label for="">Alumno:</label></td>
	<td class="dato"><label for="">A paterno:</label></td>
	<td class="dato"><label for="">A materno:</label></td>
	<td class="dato"><label for="">matricula:</label></td>
</tr>
<tr>
	<td><?php echo $row['nombre_alumno']; ?></td>
	<td><?php echo $row['A_paterno_alumno']; ?></td>
	<td><?php echo $row['A_materno_alumno']; ?></td>
	<td><?php echo $row['matricula']; ?></td>
</tr>
<tr>
	<td class="dato"><label for="">Calificación:</label></td>
	<td class="dato"><label for="">Tipo de evalución:</label></td>
	<td class="dato"><label for="">Credito:</label></td>
</tr>
<tr>
	<td><?php echo $row['calificacion']; ?></td>
	<td><?php echo $row['evaluacion']; ?></td>
	<td><?php echo $row['creditos']; ?></td>
</tr>
</table>
