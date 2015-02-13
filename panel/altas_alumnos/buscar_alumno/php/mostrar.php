<link rel="stylesheet" href="css/mostrar_alumnos.css">
<?php
$conn = new Conexion();
$sql=$conn->prepare("SELECT
a.id_alumno,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.curp,a.telefono,a.correo,a.genero,a.fecha_nacimiento,a.edad,a.estado,a.municipio,a.colonia,a.calle,a.Ninterior,a.Nexterior,a.nacionalidad,a.estado_civil,a.fotografia,a.status,
	g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
	e.id_estado_civil,e.p_estado_civil,
	s.id_status,s.status_create,
	o.id_genero_persona,o.genero_create,
	d.id_edad,d.edad_create,
	x.id_estado,x.nombre_estado,
	n.id_nacionalidad,n.nacionalidad_create,
	c.id_create_grupo,c.create_grupo,c.create_grado,c.descripcion
	FROM alumno a
	INNER JOIN create_grupo c ON c.id_create_grupo = a.id_create_grupo
	INNER JOIN grupos g ON g.id_create_grupo = c.id_create_grupo
	INNER JOIN estado_civil e ON e.id_estado_civil= a.estado_civil
	INNER JOIN status s ON s.id_status = a.status
	INNER JOIN genero o ON o.id_genero_persona = a.genero
	INNER JOIN edad d ON d.id_edad = a.edad
	INNER JOIN estados_mexico x ON x.id_estado = a.estado
	INNER JOIN nacionalidad n ON n.id_nacionalidad = a.nacionalidad
	WHERE a.id_alumno = :id");
$sql->bindParam(':id',$_POST["id"]);
$sql->execute();
$row = $sql->fetch();

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
	<td class="dato"><label for="">Colonia:</label></td>
	<td class="dato"><label for="">Calle:</label></td>
</tr>
<tr>
	<td><?php echo $row['nombre_estado']; ?></td>
	<td><?php echo $row['municipio']; ?></td>
	<td><?php echo $row['colonia']; ?></td>
	<td><?php echo $row['calle']; ?></td>
</tr>
<tr>
	<td class="dato"><label for="">Núm. Interior:</label></td>
	<td class="dato"><label for="">Núm. Exterior:</label></td>
	<td class="dato"><label for="">Nacionalidad:</label></td>
	<td class="dato"><label for="">Estado Civil:</label></td>
</tr>
<tr>
	<td>#<?php echo $row['Ninterior']; ?></td>
	<td>#<?php echo $row['Nexterior']; ?></td>
	<td><?php echo $row['nacionalidad_create']; ?></td>
	<td><?php echo $row['p_estado_civil']; ?></td>
</tr>
<tr>

	<td class="dato"><label for="">Status:</label></td>
</tr>
<tr>

	<td ><label id="status"><?php echo $row['status_create']; ?></label></td>
</tr>
</table>
