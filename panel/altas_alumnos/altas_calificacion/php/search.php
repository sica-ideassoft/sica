<?php
include_once("../../../../conexion/conexion.php");
$conn =  new Conexion();
session_start();
$busca= "%".$_POST['name']."%";
if($busca!=""){
$sql =$conn->prepare("SELECT
g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
m.id_materia,m.claveSEP,m.nombre_materia,m.credito,m.cal_min,
o.id_maestro,o.nombre,
u.id_login_maestro,u.id_maestro,u.user,
c.id_create_grupo,c.create_grupo,c.create_grado,
a.id_alumno,a.matricula,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno
FROM materias m
INNER JOIN grupos g ON m.id_materia = g.id_materia
INNER JOIN maestro o  ON o.id_maestro = g.id_maestro
INNER JOIN user_maestro u ON  u.id_maestro = o.id_maestro
INNER JOIN create_grupo c ON  c.id_create_grupo = g.id_create_grupo
INNER JOIN alumno  a      ON  a.id_create_grupo   = g.id_create_grupo

WHERE m.nombre_materia LIKE :buscar OR  a.nombre_alumno LIKE :buscar OR  a.A_paterno_alumno LIKE :buscar OR  a.A_materno_alumno LIKE :buscar OR  c.create_grado LIKE :buscar ORDER BY m.id_materia");

$sql->bindParam(':user',$_SESSION['maestro-session']);
$sql->bindParam(':buscar',$busca);

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
        <form action="mostrar_calificaciones.php" name="formulario1" method="post">
              <input type="hidden" name="id" value="<?php echo $f['id_alumno']?>"/>
              <input type="hidden" name="materia" value="<?php echo $f['id_materia']?>"/>
              <input type="hidden" name="credito" value="<?php echo $f['credito']?>"/>
              <input type="hidden" name="cal_min" value="<?php echo $f['cal_min']?>"/>
              <button name="enviar" class="botton"><span class="mostrar"></span></button>
        </form>
        </td>
	</tr>

	<?php
}

}
?>