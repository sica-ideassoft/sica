<link rel="stylesheet" href="css/mostrar_grupo.css">
<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();


$sql =$conn->prepare("SELECT
	g.id_maestro,g.id_materia,g.id_create_grupo,
	m.id_materia,m.nombre_materia,
	p.id_maestro,p.nombre,
	c.id_create_grupo,c.create_grupo,c.create_grado
	FROM grupos g
	INNER JOIN maestro p  ON p.id_maestro = g.id_maestro
	INNER JOIN materias m ON m.id_materia = g.id_materia
	INNER JOIN create_grupo c ON c.id_create_grupo = g.id_create_grupo
	WHERE g.id_grupo =:id");
$sql->bindParam(':id',$_POST["id"]);
$sql->execute();

while($row = $sql->fetch()){

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
	<td><?php echo $row['create_grado']?></td>
	<td><?php echo $row['create_grupo']?></td>
</tr>
</table>

<?php
}

 ?>