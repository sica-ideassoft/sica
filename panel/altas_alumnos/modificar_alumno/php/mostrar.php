<link rel="stylesheet" href="css/mostrar_alumnos.css">
<?php
	include_once("../conectar.php");
	$conn = new DB;
	$conn->conectar();

$id = $_GET["id"];
$sql=mysql_query("SELECT * FROM alumno WHERE id_alumno = '".$id."'");
?>

<?php
while($row = mysql_fetch_array($sql)){
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
	<td><?php echo $row['grado_alumno']; ?> ro</td>
	<td><?php echo $row['grupo_alumno']; ?></td>
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