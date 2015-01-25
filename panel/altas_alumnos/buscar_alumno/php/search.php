<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

// $busca=$_POST['name'];
$busca= "%".$_POST['name']."%";
if($busca!=""){
$busqueda=mysql_query("SELECT * FROM alumno WHERE nombre_alumno LIKE '%".$busca."%' OR A_paterno_alumno LIKE '%".$busca."%' OR A_materno_alumno LIKE '%".$busca."%'
	OR matricula LIKE '%".$busca."%' OR grado_alumno LIKE '%".$busca."%' OR grupo_alumno LIKE '%".$busca."%'");

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
		<td><?php echo $f['grado_alumno']; ?></td>
		<td><?php echo $f['grupo_alumno']; ?></td>
		<td class="lia"><a  id="eliminar" href="mostrar_alumnos.php?id=<?php echo $f['id_alumno']?>" ><span class="mas"></span></a></td>
	</tr>

	<script>

		function enviar(id)
		{
   			document.location("mostrar_alumnos.php?id="+id)
		}
	</script>

	<?php
}

}
?>

?>