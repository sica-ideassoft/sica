<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$busca= "%".$_POST['name']."%";
if($busca!=""){

$sql = "SELECT
	a.id_alumno,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.id_create_grupo,
	-- g.id_grupo,g.id_create_grupo,
	c.id_create_grupo,c.create_grupo,c.create_grado,c.descripcion
	FROM alumno a
	INNER JOIN create_grupo c ON c.id_create_grupo = a.id_create_grupo
	-- INNER JOIN create_grupo c ON c.id_create_grupo = g.id_create_grupo
	WHERE  a.nombre_alumno LIKE '%".$busca."%' OR a.A_paterno_alumno LIKE '%".$busca."%' OR a.A_materno_alumno LIKE '%".$busca."%'
	OR a.matricula LIKE '%".$busca."%'";

$query = $conn->query($sql);

	if($query->rowCount()==0) {
	?>
		<tr>
			<td colspan='7'>El alumno no existe</td>
		</tr>

	<?php
	}

while($f=$query->fetch()){

	?>
	<tr>
		<td><?php echo $f['nombre_alumno']; ?></td>
		<td><?php echo $f['A_paterno_alumno']; ?></td>
		<td><?php echo $f['A_materno_alumno']; ?></td>
		<td><?php echo $f['matricula']; ?></td>
		<td><?php echo $f['create_grado'];?></td>
		<td><?php echo $f['create_grupo'];?></td>
		<td>
		<form action="mostrar_alumnos.php" name="formulario1" method="post">
		<input type="hidden" name="id" value="<?php echo $f['id_alumno'];?>"/>
		<button name="enviar"class="botton"><span class="mas"></span></button>
		</form>
		</td>

	</tr>

	<?php
}

}
?>

?>