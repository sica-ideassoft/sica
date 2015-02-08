<link rel="stylesheet" href="css/mostrar_alumnos.css">
<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();
$sql = $conn->prepare("SELECT
a.id_alumno,a.id_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.curp,a.telefono,a.correo,a.genero,a.fecha_nacimiento,a.edad,a.estado,a.municipio,a.colonia,a.calle,a.Ninterior,a.Nexterior,a.nacionalidad,a.estado_civil,a.fotografia,a.status,
	g.grupo,g.id_grupo
	FROM alumno a
	INNER JOIN grupos g ON g.id_grupo = a.id_grupo
	WHERE a.id_alumno = :id ");

$sql->bindParam(':id',$_POST["id"]);
$sql->execute();
while($row = $sql->fetch()){

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
	<td><?php echo $row['genero']; ?></td>
</tr>
<tr>
	<td class="dato"><label for="">F. Nacimiento:</label></td>
	<td class="dato"><label for="">Edad:</label></td>
	<td class="dato"><label for="">Grado:</label></td>
	<td class="dato"><label for="">Grupo:</label></td>
</tr>

<tr>
	<td><?php echo $row['fecha_nacimiento']; ?></td>
	<td><?php echo $row['edad']; ?> Años</td>
	<td><?php
			$grado = substr($row['grupo'], -2,1);
				echo $grado;
		 ?></td>
		<td><?php
			$grupo = substr($row['grupo'], -1);
				echo $grupo;
		?></td>
</tr>

<tr>
	<td class="dato"><label for="">Estado:</label></td>
	<td class="dato"><label for="">Municipio:</label></td>
	<td class="dato"><label for="">Colonia:</label></td>
	<td class="dato"><label for="">Calle:</label></td>
</tr>
<tr>
	<td><?php echo $row['estado']; ?></td>
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
	<td><?php echo $row['nacionalidad']; ?></td>
	<td><?php echo $row['estado_civil']; ?></td>
</tr>
<tr>

	<td class="dato"><label for="">Status:</label></td>
</tr>
<tr>

	<td><?php echo $row['status']; ?></td>
</tr>
</table>

<?php
}

 ?>