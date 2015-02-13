<?php
include_once("../../../../conexion/conexion.php");
$conn =  new Conexion();

$sql1=$conn->prepare("SELECT
	a.id_alumno,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.curp,a.telefono,a.correo,a.genero,a.fecha_nacimiento,a.edad,a.estado,a.municipio,a.colonia,a.calle,a.Ninterior,a.Nexterior,a.nacionalidad,a.estado_civil,a.password,a.fotografia,a.status,
	m.id_materia,m.claveSEP,m.nombre_materia,m.fecha_inicio,m.fecha_fin,m.credito,m.cal_min,
	c.id_calificacion,c.id_alumno,c.id_materia,c.creditos,c.calificacion,c.Tipo_evaluacion,c.acumulado,
	o.id_create_grupo,o.create_grupo,o.create_grado
	FROM alumno a
	INNER JOIN create_grupo o ON o.id_create_grupo = a.id_create_grupo
	-- INNER JOIN grupos g       ON g.id_create_grupo = o.id_create_grupo
	INNER JOIN calificacion c ON c.id_alumno = a.id_alumno
	INNER JOIN materias m     ON m.id_materia = c.id_materia
	WHERE a.matricula = :user");
$sql1->bindParam(':user',$_SESSION['alumno']);
$sql1->execute();

while($historial = $sql1->fetch()){
	?>

		<tr>
			<td><label><?php echo $historial["claveSEP"];?></label></td>
			<td><label><?php echo $historial["creditos"];?></label></td>
			<td class="materia"><label><?php echo $historial["nombre_materia"]; ?></label></td>
			<td><label><?php echo $historial["calificacion"]; ?></label></td>
			<td><label>2010-3</label></td>
			<td><label><?php echo $historial["Tipo_evaluacion"]; ?></label></td>
		</tr>

	<?php

}

?>