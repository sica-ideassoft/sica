<?php
include_once("../../../../conexion/conexion.php");
$conn =  new Conexion();
session_start();
$busca= "%".$_POST['name']."%";
if($busca!=""){
$sql =$conn->prepare("SELECT
m.id_materia,m.claveSEP,m.nombre_materia,
g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
o.id_maestro,o.nombre,
a.id_alumno,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,
u.id_login_maestro,u.id_maestro,u.user,
c.id_create_grupo,c.create_grupo,c.create_grado
FROM materias m
INNER JOIN grupos g       ON g.id_materia = m.id_materia
INNER JOIN create_grupo c ON c.id_create_grupo = g.id_create_grupo
INNER JOIN maestro o      ON o.id_maestro = g.id_maestro
INNER JOIN alumno  a      ON a.id_create_grupo   = g.id_create_grupo
INNER JOIN user_maestro u ON u.id_maestro = o.id_maestro
and u.user = :user
WHERE a.nombre_alumno LIKE '%".$busca."%' ORDER BY m.id_materia");
$sql->bindParam(':user',$_SESSION['maestro-session']);
$sql->execute();
	if($sql->rowCount() ==0) {
	?>
		<tr>
			<td colspan='7'>El alumno no existe</td>
		</tr>

	<?php
	}

while($f=$sql->fetch()){

	?>
	<tr>
		<td class="materia"><?php echo $f['nombre_materia']; ?></td>
		<td><?php echo $f['nombre_alumno']; ?></td>
		<td><?php echo $f['A_paterno_alumno']; ?></td>
		<td><?php echo $f['A_materno_alumno']; ?></td>
		<td><?php echo $f['create_grado']; ?></td>
		<td><?php echo $f['create_grupo']; ?></td>



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