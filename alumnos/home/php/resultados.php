<?php
include_once("../../conexion/conectar.php");
$conn = new DB;
$conn->conectar();

$matricula = $_SESSION['alumno'];

?>
<?php

$sql=mysql_query("SELECT
	a.id_alumno,a.id_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.curp,a.telefono,a.correo,a.genero,a.fecha_nacimiento,a.edad,a.estado,a.municipio,a.colonia,a.calle,a.Ninterior,a.Nexterior,a.nacionalidad,a.estado_civil,a.password,a.fotografia,a.status,
	g.id_grupo,g.id_maestro,g.id_materia,g.grupo
	FROM alumno a
	INNER JOIN grupos  g ON g.id_grupo = a.id_grupo
	WHERE a.matricula = '".$matricula."'");
?>

<?php
$row = mysql_fetch_array($sql);
 ?>