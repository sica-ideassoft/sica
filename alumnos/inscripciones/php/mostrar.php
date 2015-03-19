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
	WHERE a.matricula = :user");
$sql->bindParam(':user',$_SESSION['sica-alumno']);
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
	<td><label class="info"><?php echo $row['nombre_alumno']; ?></label></td>
	<td><label class="info"><?php echo $row['A_paterno_alumno']; ?></label></td>
	<td><label class="info"><?php echo $row['A_materno_alumno']; ?></label></td>
	<td><label class="info"><?php echo $row['matricula']; ?></label></td>
</tr>
<tr>
	<td class="dato"><label for="">Curp:</label></td>
	<td class="dato"><label for="">Telefono:</label></td>
	<td class="dato"><label for="">Correo:</label></td>
	<td class="dato"><label for="">Genero:</label></td>
</tr>
<tr>
	<td><label class="info"><?php echo $row['curp']; ?></label></td>
	<td><label class="info"><?php echo $row['telefono']; ?></label></td>
	<td><label class="info"><?php echo $row['correo']; ?></label></td>
	<td><label class="info"><?php echo $row['genero_create']; ?></label></td>
</tr>
<tr>
	<td class="dato"><label for="">F. Nacimineto:</label></td>
	<td class="dato"><label for="">Edad:</label></td>
	<td class="dato"><label for="">Grado:</label></td>
	<td class="dato"><label for="">Grupo:</label></td>
</tr>

<tr>
	<td><label class="info"><?php echo $row['fecha_nacimiento']; ?></label></td>
	<td><label class="info"><?php echo utf8_encode($row['edad_create']); ?></label></td>
	<td><label class="info"><?php echo $row['create_grado']; ?></label></td>
	<td><label class="info"><?php echo $row['create_grupo']; ?></label></td>
</tr>

<tr>
	<td class="dato"><label for="">Estado:</label></td>
	<td class="dato"><label for="">Municipio:</label></td>
	<td class="dato"><label for="">Colonia:</label></td>
	<td class="dato"><label for="">Calle:</label></td>
</tr>
<tr>
	<td><label><?php echo $row['nombre_estado']; ?></label></td>
	<td><label><?php echo $row['municipio']; ?></label></td>
	<td><label><?php echo $row['colonia']; ?></label></td>
	<td><label><?php echo $row['calle']; ?></label></td>
</tr>
<tr>
	<td class="dato"><label for="">Núm. Interior:</label></td>
	<td class="dato"><label for="">Núm. Exterior:</label></td>
	<td class="dato"><label for="">Nacionalidad:</label></td>
	<td class="dato"><label for="">Estado Civil:</label></td>
</tr>
<tr>
	<td><label>#<?php echo $row['Ninterior']; ?></label></td>
	<td><label>#<?php echo $row['Nexterior']; ?></label></td>
	<td><label><?php echo $row['nacionalidad_create']; ?></label></td>
	<td><label><?php echo $row['p_estado_civil']; ?></label></td>
</tr>
<tr>

	<td class="dato"><label for="">Status:</label></td>
</tr>
<tr>

	<td ><label id="status"><?php echo $row['status_create']; ?></label></td>
</tr>
</table>
