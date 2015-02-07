<?php
include_once("../../../../conexion/conexion.php");
$conn =  new Conexion();
session_start();
$user = $_SESSION['maestro-session'];
echo $user;
// $busca=$_POST['name'];
$busca= "%".$_POST['name']."%";
if($busca!=""){
$sql = "SELECT
m.id_materia,m.claveSEP,m.nombre_materia,/*materia*/
g.id_grupo,g.id_maestro,g.id_materia,g.grupo, /*grupo*/
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
	";

$query = $conn->query($sql);

	if($query->rowCount() ==0) {
	?>
		<tr>
			<td colspan='7'>El alumno no existe</td>
		</tr>

	<?php
	}

while($f=$query->fetch()){

	?>
	<tr>
		<td class="materia"><?php echo $f['nombre_materia']; ?></td>
		<td><?php echo $f['nombre_alumno']; ?></td>
		<td><?php echo $f['A_paterno_alumno']; ?></td>
		<td><?php echo $f['A_materno_alumno']; ?></td>
		<td><?php
			$grado = substr($f['grupo'], -2,1);
				echo $grado;
		 ?></td>
		<td><?php
			$grupo = substr($f['grupo'], -1);
				echo $grupo;
		?></td>


		<td>
        <form action="mostrar_alumno.php" name="formulario1" method="post">
        <input type="hidden" name="id" value="<?php echo $f['id_alumno']?>"/>
        <button name="enviar"class="botton"><span class="mas"></span></button>
        </form>
        </td>
	</tr>

	<?php
}

}
?>