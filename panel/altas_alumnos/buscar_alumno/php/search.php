
<?php
require_once('Connection.simple.php');

$conn = dbConnect();
$OK = true;
if (isset($_POST['name'])) {
	$data = "%".$_POST['name']."%";
	$sql = 'SELECT * FROM alumno WHERE nombre like ?';
	$stmt = $conn->prepare($sql);
	$results = $stmt->execute(array($data));
	$rows = $stmt->fetchAll();
	$error = $stmt->errorInfo();
}
if(empty($rows)) {
	?>
	<tr>
		<td colspan='5'>El alumno no existe</td>
	</tr>

	<?php
}
else {
	foreach ($rows as $row) {
?>

		<tr>
<td><?php echo $row['nombre']; ?></td>
<td><?php echo $row['A_paterno']; ?></td>
<td><?php echo $row['A_materno']; ?></td>
<td><?php echo $row['matricula']; ?></td>
<td class="lia"><a  id="eliminar" href="mostrar_alumnos.php?id=<?php echo $row['id_alumno']?>"><span class="mas"></span></a></td>
		</tr>

		<?php
	}

}
?>