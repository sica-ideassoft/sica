<link rel="stylesheet" href="css/mostrar_maestro.css">
<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$id = $_POST["id"];
$sql = "SELECT * FROM maestro m
INNER JOIN user_maestro u ON m.id_maestro =  u.id_maestro where m.id_maestro and u.id_maestro = '".$id."'";

$query = $conn->query($sql);

while($row = $query->fetch()){

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
	<td><?php echo $row['edad']; ?> Años</td>
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
	<td class="dato"><label for="">Núm. Interior:</label></td>
	<td class="dato"><label for="">Núm Exterior:</label></td>
	<td class="dato"><label for="">nacionalidad:</label></td>


</tr>
<tr>
	<td><?php echo $row['calle']; ?></td>
	<td>#<?php echo $row['Ninterior']; ?></td>
	<td>#<?php echo $row['Nexterior']; ?></td>
	<td><?php echo $row['nacionalidad']; ?></td>

</tr>
<tr>
	<td class="dato"><label for="">User:</label></td>
</tr>
<tr>
	<td><?php echo $row['user']; ?></td>
</tr>
</table>

<?php
}

 ?>