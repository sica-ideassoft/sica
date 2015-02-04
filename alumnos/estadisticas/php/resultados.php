<?php
include_once("../../conexion/conectar.php");
$conn = new DB;
$conn->conectar();

$user = $_SESSION['alumno'];

?>
<?php

$sql=mysql_query("SELECT
	a.id_alumno,a.id_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.curp,a.telefono,a.correo,a.genero,a.fecha_nacimiento,a.edad,a.estado,a.municipio,a.colonia,a.calle,a.Ninterior,a.Nexterior,a.nacionalidad,a.estado_civil,a.password,a.fotografia,a.status,
	g.id_grupo,g.id_maestro,g.id_materia,g.grupo,
	c.id_calificacion,c.id_alumno,c.id_grupo,c.calificacion,c.acumulado
	FROM alumno a
	INNER JOIN grupos  g      ON g.id_grupo = a.id_grupo
	INNER JOIN calificacion c ON c.id_alumno = a.id_alumno
	WHERE a.matricula = '".$user."'");
?>

<?php
$row = mysql_fetch_array($sql);
 ?>