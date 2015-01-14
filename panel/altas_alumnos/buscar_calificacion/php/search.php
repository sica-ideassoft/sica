<?php
require_once('Connection.simple.php');

$conn = dbConnect();
	$OK = true;
	if (isset($_POST['name'])) {
		$data = "%".$_POST['name']."%";
		$sql = 'SELECT * FROM materias WHERE nombre like ?';
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
			echo "<tr>";
				echo "<td>".$row['nombre']."</td>";
				echo "<td>".$row['profesor']."</td>";
				echo "<td>".$row['credito']."</td>";
				echo "<td>".$row['cal_min']."</td>";
				?>

				<td class="lia"><a href="mostrar_materias.php?id=<?php echo $row['id_materia']?>"><span class="mas"></span></a></td>

<?php
		}

	}
?>
