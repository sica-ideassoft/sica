<link rel="stylesheet" href="css/mostrar_alumnos.css">
<?php
$conn =  new Conexion();

$sql =$conn->prepare("SELECT s.id_status,s.status_create,
		a.id_alumno,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.curp,a.telefono,a.correo,a.genero,a.fecha_nacimiento,a.edad,a.estado,a.municipio,a.colonia,a.calle,a.Ninterior,a.Nexterior,a.nacionalidad,a.estado_civil,a.fotografia,a.status,
		g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
		c.id_create_grupo,c.create_grupo,c.create_grado,
		m.id_materia,m.claveSEP,m.nombre_materia,m.fecha_inicio,m.fecha_fin,m.credito,m.cal_min,
		o.id_maestro,o.nombre,o.A_paterno,o.A_materno,o.clave,o.curp,o.telefono,o.correo,o.genero,o.edad,o.estado_civil,o.fecha_nacimiento,o.Estado,o.municipio,o.calle,o.Ninterior,o.Nexterior,o.nacionalidad,
		n.id_genero_persona,n.genero_create,
		e.id_edad,e.edad_create,
		x.id_estado,x.nombre_estado,x.codigo,
		d.id_nacionalidad,d.nacionalidad_create,
		l.id_estado_civil,l.p_estado_civil,
		u.id_status,u.status_create
	FROM alumno a
	INNER JOIN status s ON s.id_status = a.status
	INNER JOIN grupos g ON g.id_create_grupo = a.id_create_grupo
	INNER JOIN create_grupo c ON c.id_create_grupo = g.id_create_grupo
	INNER JOIN materias m ON m.id_materia = g.id_materia
	INNER JOIN maestro o ON o.id_maestro = g.id_maestro
	INNER JOIN genero n ON n.id_genero_persona = a.genero
	INNER JOIN edad e ON e.id_edad = a.edad
	INNER JOIN estados_mexico x ON x.id_estado = a.estado
	INNER JOIN nacionalidad d ON d.id_nacionalidad = a.nacionalidad
	INNER JOIN estado_civil l ON l.id_estado_civil = a.estado_civil
	INNER JOIN status u ON u.id_status = a.status

	where a.id_alumno = :id");

$sql->bindParam(':id',$_POST["id"]);
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
	<td class="dato"><label for="">Curp:</label></td>
	<td class="dato"><label for="">Telefono:</label></td>
	<td class="dato"><label for="">Correo:</label></td>
	<td class="dato"><label for="">Genero:</label></td>
</tr>
<tr>
	<td><?php echo $row['curp']; ?></td>
	<td><?php echo $row['telefono']; ?></td>
	<td><?php echo $row['correo']; ?></td>
	<td><?php echo $row['genero_create']; ?></td>
</tr>
<tr>
	<td class="dato"><label for="">F. Nacimineto:</label></td>
	<td class="dato"><label for="">Edad:</label></td>
	<td class="dato"><label for="">Grado:</label></td>
	<td class="dato"><label for="">Grupo:</label></td>
</tr>

<tr>
	<td><?php echo $row['fecha_nacimiento']; ?></td>
	<td><?php echo utf8_encode($row['edad_create']); ?></td>
	<td><?php echo $row['create_grado']; ?></td>
	<td><?php echo $row['create_grupo']; ?></td>
</tr>

<tr>
	<td class="dato"><label for="">Estado:</label></td>
	<td class="dato"><label for="">Municipio:</label></td>
	<td class="dato"><label for="">Calle:</label></td>
	<td class="dato"><label for="">Nacionalidad:</label></td>
</tr>
<tr>
	<td><?php echo $row['nombre_estado']; ?></td>
	<td><?php echo $row['municipio']; ?></td>
	<td><?php echo $row['calle']; ?></td>
	<td><?php echo $row['nacionalidad_create']; ?></td>
</tr>
<tr>
	<td class="dato"><label for="">Estado Civil:</label></td>
	<td class="dato"><label for="">Status:</label></td>
	<td class="dato"><label for="">Profesor:</label></td>
	<td class="dato"><label for="">Matería:</label></td>

</tr>
<tr>
	<td><?php echo $row['p_estado_civil']; ?></td>
	<td><?php echo $row['status_create']; ?></td>
	<td><?php echo $row['nombre']; ?></td>
	<td><?php echo $row['nombre_materia']; ?></td>

</tr>
</table>



