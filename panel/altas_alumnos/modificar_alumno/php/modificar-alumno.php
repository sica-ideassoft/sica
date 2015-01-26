
<?php
include_once("../conectar.php");
$conn = new DB;
$conn->conectar();

$id = $_GET["id"];

$peticion=mysql_query("SELECT a.id_alumno,a.id_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.curp,a.telefono,a.correo,a.genero,a.fecha_nacimiento,a.edad,a.estado,a.municipio,a.colonia,a.calle,a.Ninterior,a.Nexterior,a.nacionalidad,a.estado_civil,a.fotografia,a.status,
	g.grado,g.grupo,g.id_grupo
	FROM alumno a
	INNER JOIN grupos g ON g.id_grupo = a.id_grupo
 	WHERE a.id_alumno = '".$id."'");
$alumno = mysql_fetch_array($peticion);

?>
