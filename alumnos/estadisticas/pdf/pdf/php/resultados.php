<?php
session_start();
$user = $_SESSION['alumno'];
include_once("../../../../conexion/conectar.php");
$conn = new DB;
$conn->conectar();

$sql=mysql_query("SELECT
	a.id_alumno,a.id_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.curp,a.telefono,a.correo,a.genero,a.fecha_nacimiento,a.edad,a.estado,a.municipio,a.colonia,a.calle,a.Ninterior,a.Nexterior,a.nacionalidad,a.estado_civil,a.password,a.fotografia,a.status,
	m.id_materia,m.claveSEP,m.nombre_materia,m.fecha_inicio,m.fecha_fin,m.credito,m.cal_min,
	g.id_grupo,g.id_maestro,g.id_materia,g.grupo,
	c.id_calificacion,c.id_alumno,c.id_materia,c.creditos,c.Tipo_evaluacion,c.calificacion,c.acumulado

	FROM alumno a
	INNER JOIN grupos  g      ON g.id_grupo = a.id_grupo
	INNER JOIN calificacion c ON c.id_alumno = a.id_alumno
	INNER JOIN materias m     ON m.id_materia = g.id_materia
	WHERE a.matricula = '".$user."'");
$row = mysql_fetch_array($sql);

 ?>

