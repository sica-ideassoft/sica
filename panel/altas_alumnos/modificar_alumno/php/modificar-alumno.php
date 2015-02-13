
<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();


$sql = $conn->prepare("SELECT a.id_alumno,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.curp,a.telefono,a.correo,a.genero,a.fecha_nacimiento,a.edad,a.estado,a.municipio,a.colonia,a.calle,a.Ninterior,a.Nexterior,a.nacionalidad,a.estado_civil,a.fotografia,a.status,
	g.id_create_grupo,g.id_grupo
	FROM alumno a
	INNER JOIN grupos g ON g.id_create_grupo = a.id_create_grupo
 	WHERE a.id_alumno = :id");
$sql->bindParam(":id",$_POST["id"]);
$sql->execute();
$alumno = $sql->fetch();

?>
