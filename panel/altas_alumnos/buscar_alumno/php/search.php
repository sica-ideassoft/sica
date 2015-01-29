<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

// $busca=$_POST['name'];
$busca= "%".$_POST['name']."%";
if($busca!=""){

$busqueda=mysql_query("SELECT
	a.id_alumno,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.id_grupo,
	g.grado,g.grupo,g.id_grupo
	FROM alumno a
	INNER JOIN grupos g ON g.id_grupo = a.id_grupo
	WHERE a.nombre_alumno LIKE '%".$busca."%' OR a.A_paterno_alumno LIKE '%".$busca."%' OR a.A_materno_alumno LIKE '%".$busca."%'
	OR a.matricula LIKE '%".$busca."%'");

// $row=mysql_fetch_array($busqueda);
	//

	if(mysql_num_rows($busqueda)==0) {
	?>
		<tr>
			<td colspan='7'>El alumno no existe</td>
		</tr>

	<?php
	}

while($f=mysql_fetch_array($busqueda)){

	?>
	<tr>
		<td><?php echo $f['nombre_alumno']; ?></td>
		<td><?php echo $f['A_paterno_alumno']; ?></td>
		<td><?php echo $f['A_materno_alumno']; ?></td>
		<td><?php echo $f['matricula']; ?></td>
		<td><?php echo $f['grado']; ?></td>
		<td><?php echo $f['grupo']; ?></td>
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