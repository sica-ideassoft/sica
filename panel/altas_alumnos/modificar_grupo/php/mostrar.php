<link rel="stylesheet" href="css/mostrar_grupo.css">
<?php
include_once("../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

$id = $_POST["id"];
$sql = mysql_query("SELECT
	g.id_maestro,g.id_materia,g.grupo,
	m.id_materia,m.nombre_materia,
	p.id_maestro,p.nombre
	FROM grupos g
	INNER JOIN maestro p  ON p.id_maestro = g.id_maestro
	INNER JOIN materias m ON m.id_materia = g.id_materia
	WHERE g.id_grupo = '$id'");
// $sql=mysql_query("SELECT * FROM maestro WHERE id_maestro = '".$id."'");
?>

<?php
while($row = mysql_fetch_array($sql)){

?>
<table class="tabla-mostrar">
<tr>

	<td class="dato"><label for="">Profeso:</label></td>
	<td class="dato"><label for="">Matería:</label></td>
	<td class="dato"><label for="">Grado:</label></td>
	<td class="dato"><label for="">Grupo:</label></td>
</tr>
<tr>
	<td><?php echo $row['nombre']; ?></td>
	<td><?php echo $row['nombre_materia']; ?></td>
	<td><?php
			$grado = substr($row['grupo'], -2,1);
				echo $grado;
		 ?></td>
		<td><?php
			$grupo = substr($row['grupo'], -1);
				echo $grupo;
		?></td>
</tr>
</table>

<?php
}

 ?>