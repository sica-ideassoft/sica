<link rel="stylesheet" href="css/mostrar_alumnos.css">
<?php
$conn = new Conexion();
$id = $_POST["id"];

$sql = "SELECT  m.id_maestro,m.nombre,m.A_paterno,m.A_materno,m.clave,m.curp,m.telefono,m.correo,m.genero,m.edad,m.estado_civil,m.fecha_nacimiento,m.Estado,m.municipio,m.calle,m.Ninterior,m.Nexterior,m.nacionalidad,
	u.id_login_maestro,u.id_maestro,u.user,u.password,u.imagen,
	e.id_estado_civil,e.p_estado_civil,
	o.id_genero_persona,o.genero_create,
	d.id_edad,d.edad_create,
	x.id_estado,x.nombre_estado,
	n.id_nacionalidad,n.nacionalidad_create
FROM maestro m
INNER JOIN user_maestro u ON m.id_maestro =  u.id_maestro
INNER JOIN estado_civil e ON e.id_estado_civil= m.estado_civil
	INNER JOIN genero o ON o.id_genero_persona = m.genero
	INNER JOIN edad d ON d.id_edad = m.edad
	INNER JOIN estados_mexico x ON x.id_estado = m.Estado
	INNER JOIN nacionalidad n ON n.id_nacionalidad = m.nacionalidad
where m.id_maestro and u.id_maestro = '".$id."'";

$query = $conn->query($sql);
while($row = $query->fetch()){
$nombre = $row['nombre'];
?>
<table class="tabla-mostrar">
<tr>
	<td class="dato"><label for="">Nombre:</label></td>
	<td class="dato"><label for="">A paterno:</label></td>
	<td class="dato"><label for="">A materno:</label></td>
	<td class="dato"><label for="">Clave:</label></td>
</tr>
	<td class="result"><?php echo $row['nombre']; ?></td>
	<td class="result"><?php echo $row['A_paterno']; ?></td>
	<td class="result"><?php echo $row['A_materno']; ?></td>
	<td class="result"><?php echo $row['clave']; ?></td>
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
	<td class="dato"><label for="">Edad:</label></td>
	<td class="dato"><label for="">E Civil:</label></td>
	<td class="dato"><label for="">F. Nacimineto:</label></td>
	<td class="dato"><label for="">Estado:</label></td>
</tr>

<tr>
	<td><?php echo utf8_encode($row['edad_create']); ?></td>
	<td><?php echo $row['p_estado_civil']; ?></td>
	<td><?php echo $row['fecha_nacimiento']; ?></td>
	<td><?php echo utf8_encode($row['nombre_estado']); ?></td>
</tr>

<tr>
	<td class="dato"><label for="">Municipio:</label></td>
	<td class="dato"><label for="">Calle:</label></td>
	<td class="dato"><label for="">Núm Interior:</label></td>
	<td class="dato"><label for="">Núm Exterior:</label></td>
</tr>
<tr>
	<td><?php echo $row['municipio']; ?></td>
	<td><?php echo $row['calle']; ?></td>
	<td>#<?php echo $row['Ninterior']; ?></td>
	<td>#<?php echo $row['Nexterior']; ?></td>
</tr>
<tr>
	<td class="dato"><label for="">Nacionalidad:</label></td>
	<td class="dato"><label for="">User:</label></td>

</tr>
<tr>

	<td><?php echo $row['nacionalidad_create']; ?></td>
	<td><?php echo $row['user']; ?></td>
</tr>
</table>

<?php
}

 ?>