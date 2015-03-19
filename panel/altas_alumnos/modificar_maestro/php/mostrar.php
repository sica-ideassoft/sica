<link rel="stylesheet" href="css/mostrar_maestro.css">
<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$sql =$conn->prepare("SELECT * FROM maestro m
INNER JOIN user_maestro u ON m.id_maestro =  u.id_maestro
INNER JOIN nacionalidad n ON n.id_nacionalidad =  m.nacionalidad
INNER JOIN genero g ON g.id_genero_persona =  m.genero
INNER JOIN edad e ON e.id_edad =  m.edad
INNER JOIN estado_civil c ON c.id_estado_civil =  m.estado_civil
INNER JOIN estados_mexico x ON x.id_estado =  m.Estado

where m.id_maestro and u.id_maestro = :id");
$sql->bindParam(':id',$_POST["id"]);
$sql->execute();

while($row = $sql->fetch()){

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
	<td><?php echo $row['genero_create']; ?></td>
	<td><?php echo utf8_encode($row['edad_create']); ?></td>
</tr>
<tr>
	<td class="dato"><label for="">E. Civil:</label></td>
	<td class="dato"><label for="">F Nacimiento:</label></td>
	<td class="dato"><label for="">Estado:</label></td>
	<td class="dato"><label for="">Municipio:</label></td>
</tr>

<tr>
	<td><?php echo $row['p_estado_civil']; ?></td>
	<td><?php echo $row['fecha_nacimiento']; ?></td>
	<td><?php echo $row['nombre_estado']; ?></td>
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
	<td><?php echo $row['nacionalidad_create']; ?></td>

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