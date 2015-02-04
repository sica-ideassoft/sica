<link rel="stylesheet" href="css/mostrar_alumnos.css">
<?php

$id = $_POST["id"];


$queris = mysql_query("SELECT
g.id_grupo,g.id_maestro,g.id_materia,g.grupo,
m.id_materia,m.claveSEP,m.nombre_materia,m.credito,m.cal_min,
o.id_maestro,o.nombre,
u.id_login_maestro,u.id_maestro,u.user
FROM materias m
INNER JOIN grupos g ON m.id_materia = g.id_materia
INNER JOIN maestro o  ON o.id_maestro = g.id_maestro
INNER JOIN user_maestro u ON  u.id_maestro = o.id_maestro
and u.user = '$user'");

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
	<td class="dato"><label for="">Clave SEP:</label></td>
	<td class="dato"><label for="">Nombre:</label></td>
	<td class="dato"><label for="">Profesor:</label></td>
	<td class="dato"><label for="">Creditos:</label></td>
</tr>

	<td><?php echo $row['claveSEP']; ?></td>
	<td><?php echo $row['nombre_materia']; ?></td>
	<td><?php echo $listar2['nombre']; ?></td>
	<td><?php echo $row['credito']; ?></td>
</tr>
<tr>
	<td class="dato"><label for="">Fecha inicio:</label></td>
	<td class="dato"><label for="">Fecha fin:</label></td>
	<td class="dato"><label for="">Calificación min:</label></td>
</tr>
<tr>
	<td><?php echo $row['fecha_inicio']; ?></td>
	<td><?php echo $row['fecha_fin']; ?></td>
	<td><?php echo $row['cal_min']; ?></td>
</tr>

</table>

<?php
}

 ?>