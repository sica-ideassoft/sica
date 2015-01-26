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
$busqueda=mysql_query("SELECT
m.id_materia,m.claveSEP,m.nombre_materia,/*materia*/
g.id_grupo,g.id_maestro,g.id_materia,g.grado,g.grupo, /*grupo*/
o.id_maestro,o.nombre,/*maestro*/
a.id_alumno,a.id_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,/*alumno*/
u.id_login_maestro,u.id_maestro,u.user/*user_maestro*/
FROM materias m
INNER JOIN grupos g       ON g.id_materia = m.id_materia
INNER JOIN maestro o      ON o.id_maestro = g.id_maestro
INNER JOIN alumno  a      ON a.id_grupo   = g.id_grupo
INNER JOIN user_maestro u ON u.id_maestro = o.id_maestro
and u.user = '".$user."'
WHERE a.nombre_alumno LIKE '%".$busca."%'
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
		<td class="materia"><?php echo $f['nombre_materia']; ?></td>
		<td><?php echo $f['nombre_alumno']; ?></td>
		<td><?php echo $f['A_paterno_alumno']; ?></td>
		<td><?php echo $f['A_materno_alumno']; ?></td>
		<td><?php echo $f['grado']; ?></td>
		<td><?php echo $f['grupo']; ?></td>


		<td class="lia medio"><a  id="eliminar" href="#" onclick="mostrarAlumno(<?php echo $f['id_alumno']?>)"><span class="mas"></span></a></td>
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