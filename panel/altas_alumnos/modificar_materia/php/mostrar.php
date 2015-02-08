<link rel="stylesheet" href="css/mostrar_materia.css">
<?php
  include_once("../../../conexion/conexion.php");
  $conn = new Conexion();

$sql=$conn->prepare("SELECT * FROM materias WHERE id_materia = :id");
$sql->bindParam(':id',$_POST["id"]);
$sql->execute();

while($row = $sql->fetch()){
$nombre = $row['nombre_materia'];
?>
<table class="tabla-mostrar">
<tr>
	<td class="dato"><label for="">Clave SEp:</label></td>
	<td class="dato"><label for="">Nombre:</label></td>
	<td class="dato"><label for="">Creditos:</label></td>
</tr>
	<td><?php echo $row['claveSEP']; ?></td>
	<td><?php echo $row['nombre_materia']; ?></td>
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