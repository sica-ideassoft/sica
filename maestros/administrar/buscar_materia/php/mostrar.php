<link rel="stylesheet" href="css/mostrar_alumnos.css">
<?php
$conn =  new Conexion();

$sql=$conn->prepare("SELECT
o.id_maestro,o.nombre,o.A_paterno,o.A_materno,o.clave,o.curp,o.telefono,o.correo,o.genero,o.edad,o.estado_civil,o.fecha_nacimiento,o.Estado,o.municipio,o.calle,o.Ninterior,o.Nexterior,o.nacionalidad,
 m.id_materia,m.claveSEP,m.nombre_materia,m.fecha_inicio,m.fecha_fin,m.credito,m.cal_min,
g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
u.id_login_maestro,u.id_maestro,u.user
FROM materias m
INNER JOIN grupos g ON g.id_materia = m.id_materia
INNER JOIN maestro o ON o.id_maestro = g.id_maestro
INNER JOIN user_maestro u ON u.id_maestro = o.id_maestro
	WHERE m.id_materia = :id");
$sql->bindParam(':id',$_POST['id']);
$sql->execute();

$row = $sql->fetch();
$nombre = $row['nombre_materia'];
?>
<table class="tabla-mostrar">
<tr>
	<td class="dato"><label for="">Clave SEP:</label></td>
	<td class="dato"><label for="">Nombre:</label></td>
	<td class="dato"><label for="">Profesor:</label></td>
	<td class="dato"><label for="">Creditos:</label></td>
</tr>

	<td><?php echo $row['claveSEP']; ?></td>
	<td><?php echo $row['nombre_materia']; ?></td>
	<td><?php echo $row['nombre']; ?></td>
	<td><?php echo $row['credito']; ?></td>
</tr>
<tr>
	<td class="dato"><label for="">Fecha inicio:</label></td>
	<td class="dato"><label for="">Fecha fin:</label></td>
	<td class="dato"><label for="">Calificación min:</label></td>
</tr>
<tr>
	<td><?php echo $row['fecha_inicio']; ?></td>
	<td><?php echo $row['fecha_fin']; ?></td>
	<td><?php echo $row['cal_min']; ?></td>
</tr>

</table>
