<link rel="stylesheet" href="css/mostrar_materia.css">
<?php
include_once("../conectar.php");
$conn = new DB;
$conn->conectar();

$id = $_GET["id"];
$sql= mysql_query("SELECT * FROM materias WHERE id_materia = '".$id."'");

?>

<?php
while($row = mysql_fetch_array($sql)){
$nombre = $row['nombre_materia'];
?>
<table class="tabla-mostrar">
<tr>
	<td class="dato"><label for="">Clave SEp:</label></td>
	<td class="dato"><label for="">Nombre:</label></td>
	<td class="dato"><label for="">Profesor:</label></td>
	<td class="dato"><label for="">Creditos:</label></td>
</tr>
	<td><?php echo $row['claveSEP']; ?></td>
	<td><?php echo $row['nombre_materia']; ?></td>
	<td><?php echo $row['profesor']; ?></td>
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