<link rel="stylesheet" href="css/mostrar_maestro.css">
<?php
include_once("../conectar.php");
$conn = new DB;
$conn->conectar();

$id = $_GET["id"];
$sql=mysql_query("SELECT * FROM maestro WHERE id_maestro = '".$id."'");
?>

<?php
while($row = mysql_fetch_array($sql)){
$nombre = $row['nombre'];
?>
<table class="tabla-mostrar">
<tr>

	<td class="dato"><label for="">Nombre:</label></td>
	<td class="dato"><label for="">A paterno:</label></td>
	<td class="dato"><label for="">A materno:</label></td>
	<td class="dato"><label for="">Curp:</label></td>
</tr>
	<td><?php echo $row['nombre']; ?></td>
	<td><?php echo $row['A_paterno']; ?></td>
	<td><?php echo $row['A_materno']; ?></td>
	<td><?php echo $row['curp']; ?></td>
</tr>
<tr>
	<td class="dato"><label for="">Telefono:</label></td>
	<td class="dato"><label for="">Correo:</label></td>
	<td class="dato"><label for="">Genero:</label></td>
	<td class="dato"><label for="">Edad:</label></td>
</tr>
<tr>
	<td><?php echo $row['telefono']; ?></td>
	<td><?php echo $row['correo']; ?></td>
	<td><?php echo $row['genero']; ?></td>
	<td><?php echo $row['edad']; ?></td>
</tr>
<tr>
	<td class="dato"><label for="">E. Civil:</label></td>
	<td class="dato"><label for="">F Nacimiento:</label></td>
	<td class="dato"><label for="">Estado:</label></td>
	<td class="dato"><label for="">Municipio:</label></td>
</tr>

<tr>
	<td><?php echo $row['estado_civil']; ?></td>
	<td><?php echo $row['fecha_nacimiento']; ?></td>
	<td><?php echo $row['Estado']; ?></td>
	<td><?php echo $row['municipio']; ?></td>
</tr>
<tr>
	<td class="dato"><label for="">calle:</label></td>
	<td class="dato"><label for="">nacionalidad:</label></td>
</tr>
<tr>
	<td><?php echo $row['calle']; ?></td>
	<td><?php echo $row['nacionalidad']; ?></td>
</tr>

</table>

<?php
}

 ?>