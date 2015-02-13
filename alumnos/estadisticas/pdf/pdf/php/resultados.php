<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();
session_start();
$sql=$conn->prepare("SELECT
	a.id_alumno,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.curp,a.telefono,a.correo,a.genero,a.fecha_nacimiento,a.edad,a.estado,a.municipio,a.colonia,a.calle,a.Ninterior,a.Nexterior,a.nacionalidad,a.estado_civil,a.password,a.fotografia,a.status,
	g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
	c.id_calificacion,c.id_alumno,c.id_materia,c.calificacion,c.creditos,c.acumulado
	FROM alumno a
	INNER JOIN grupos  g      ON g.id_create_grupo = a.id_create_grupo
	INNER JOIN calificacion c ON c.id_alumno = a.id_alumno
	WHERE a.matricula = :user");
$sql->bindParam(':user',$_SESSION['alumno']);
$sql->execute();
$row =$sql->fetch();

 ?>

