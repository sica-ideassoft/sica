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
			echo "<tr>";
				echo "<td>".$row['nombre']."</td>";
				echo "<td>".$row['A_paterno']."</td>";
				echo "<td>".$row['A_materno']."</td>";
				echo "<td>".$row['matricula']."</td>";
?>
		<td class="lia"><a href=""><span class="mas"></span></a></td></tr>
<?php
		}

	}
?>