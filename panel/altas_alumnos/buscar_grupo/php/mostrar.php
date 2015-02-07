<link rel="stylesheet" href="css/mostrar_alumnos.css">
<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();
$id = $_POST["id"];

$sql = "SELECT *
FROM maestro m
INNER JOIN user_maestro u ON m.id_maestro =  u.id_maestro where m.id_maestro and u.id_maestro = '".$id."'";
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
	<td><?php echo $row['genero']; ?></td>
</tr>
<tr>
	<td class="dato"><label for="">Edad:</label></td>
	<td class="dato"><label for="">E Civil:</label></td>
	<td class="dato"><label for="">F. Nacimineto:</label></td>
	<td class="dato"><label for="">Estado:</label></td>
</tr>

<tr>
	<td><?php echo $row['edad']; ?></td>
	<td><?php echo $row['estado_civil']; ?></td>
	<td><?php echo $row['fecha_nacimiento']; ?></td>
	<td><?php echo $row['Estado']; ?></td>
</tr>

<tr>
	<td class="dato"><label for="">Municipio:</label></td>
	<td class="dato"><label for="">Calle:</label></td>
	<td class="dato"><label for="">Nacionalidad:</label></td>
	<td class="dato"><label for="">User:</label></td>
</tr>
<tr>
	<td><?php echo $row['municipio']; ?></td>
	<td><?php echo $row['calle']; ?></td>
	<td><?php echo $row['nacionalidad']; ?></td>
	<td><?php echo $row['user']; ?></td>
</tr>
<tr>

</tr>
</table>

<?php
}

 ?>