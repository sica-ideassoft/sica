<link rel="stylesheet" href="css/mostrar_alumnos.css">
<?php

$id = $_GET["id"];


$queris = mysql_query("SELECT m.profesor,u.id_maestro,u.user,o.id_maestro,o.nombre
FROM materias m
INNER JOIN user_maestro u  ON m.id_materia = '$id' and m.profesor = u.user
INNER JOIN maestro o  ON o.id_maestro =  u.id_maestro");

$listar2 = mysql_fetch_array($queris);

// echo $listar2['nombre'];

$sql=mysql_query("SELECT * FROM materias WHERE id_materia = '".$id."'");
?>

<?php
while($row = mysql_fetch_array($sql)){
$nombre = $row['nombre_materia'];
?>
<table class="tabla-mostrar">
<tr>
	<td class="dato"><label for="">Clave SEp:</label></td>
	<td class="dato"><label for="">Modulo:</label></td>
	<td class="dato"><label for="">Nombre:</label></td>
	<td class="dato"><label for="">Profesor:</label></td>
</tr>

	<td><?php echo $row['claveSEP']; ?></td>
	<td><?php echo $row['modulo']; ?></td>
	<td><?php echo $row['nombre_materia']; ?></td>
	<td><?php echo $listar2['nombre']; ?></td>
</tr>
<tr>
	<td class="dato"><label for="">Fecha inicio:</label></td>
	<td class="dato"><label for="">Fecha fin:</label></td>
	<td class="dato"><label for="">Creditos:</label></td>
	<td class="dato"><label for="">Calificación min:</label></td>
</tr>
<tr>
	<td><?php echo $row['fecha_inicio']; ?></td>
	<td><?php echo $row['fecha_fin']; ?></td>
	<td><?php echo $row['credito']; ?></td>
	<td><?php echo $row['cal_min']; ?></td>
</tr>

</table>

<?php
}

 ?>