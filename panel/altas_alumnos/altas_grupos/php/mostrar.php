<link rel="stylesheet" href="css/mostrar_alumnos.css">
<?php
$id = $_GET["id"];
$sql=mysql_query("SELECT * FROM alumno WHERE id_alumno = '".$id."'");

while($row = mysql_fetch_array($sql)){
$nombre = $row['nombre'];
?>
<table class="tabla-mostrar">
<tr>
	<td class="dato"><label for="">Nombre:</label></td>
	<td class="dato"><label for="">A paterno:</label></td>
	<td class="dato"><label for="">A materno:</label></td>
	<td class="dato"><label for="">Matricula:</label></td>
</tr>
	<td><?php echo $row['nombre']; ?></td>
	<td><?php echo $row['A_paterno']; ?></td>
	<td><?php echo $row['A_materno']; ?></td>
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
	<td class="dato"><label for="">F. Nacimineto:</label></td>
	<td class="dato"><label for="">Edad:</label></td>
	<td class="dato"><label for="">Grado:</label></td>
	<td class="dato"><label for="">Grupo:</label></td>
</tr>

<tr>
	<td><?php echo $row['fecha_nacimiento']; ?></td>
	<td><?php echo $row['edad']; ?></td>
	<td><?php echo $row['grado']; ?></td>
	<td><?php echo $row['grupo']; ?></td>
</tr>

<tr>
	<td class="dato"><label for="">Estado:</label></td>
	<td class="dato"><label for="">Municipio:</label></td>
	<td class="dato"><label for="">Calle:</label></td>
	<td class="dato"><label for="">Nacionalidad:</label></td>
</tr>
<tr>
	<td><?php echo $row['estado']; ?></td>
	<td><?php echo $row['municipio']; ?></td>
	<td><?php echo $row['calle']; ?></td>
	<td><?php echo $row['nacionalidad']; ?></td>
</tr>
<tr>
	<td class="dato"><label for="">Status:</label></td>
	<td class="dato"><label for="">Estado Civil:</label></td>
</tr>
<tr>
	<td><?php echo $row['status']; ?></td>
	<td><?php echo $row['estado_civil']; ?></td>
</tr>
</table>

<?php
}

 ?>