<?php
include_once("../../conexion/conexion.php");
$conn = new Conexion();
$user = $_SESSION['alumno'];

$sql="SELECT
	a.id_alumno,a.id_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.curp,a.telefono,a.correo,a.genero,a.fecha_nacimiento,a.edad,a.estado,a.municipio,a.colonia,a.calle,a.Ninterior,a.Nexterior,a.nacionalidad,a.estado_civil,a.password,a.fotografia,a.status,
	g.id_grupo,g.id_maestro,g.id_materia,g.grupo
	FROM alumno a
	INNER JOIN grupos  g ON g.id_grupo = a.id_grupo
	WHERE a.matricula = '".$user."'";
$query = $conn ->query($sql);
$row = $query -> fetch();
 ?>