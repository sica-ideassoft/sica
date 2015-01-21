<?php
session_start();
$user = $_SESSION['maestro-session'];
echo $user;


include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();
// $busca=$_POST['name'];
$busca= "%".$_POST['name']."%";
if($busca!=""){
$busqueda=mysql_query("SELECT * FROM alumno WHERE nombre LIKE '%".$busca."%' OR A_paterno LIKE '%".$busca."%' OR A_materno LIKE '%".$busca."%'
	");

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
		<td class="materia"><?php echo $f['nombre']; ?></td>
		<td><?php echo $f['A_paterno']; ?></td>
		<td ><?php echo $f['A_materno']; ?></td>
		<td><?php echo $f['matricula']; ?></td>
		<td><?php echo $f['matricula']; ?></td>
		<td><?php echo $f['matricula']; ?></td>

		<td class="lia"><a  id="eliminar" href="#" onclick="mostrarAlumno(<?php echo $f['id_alumno']?>)"><span class="mas"></span></a></td>
	</tr>

	<script>
		function mostrarAlumno(id)
		{
			window.location = "mostrar_alumnos.php?id="+id;
		}
	</script>

	<?php
}

}
?>