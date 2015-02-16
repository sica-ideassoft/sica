<?php
include_once("../../conexion/conexion.php");
$conn = new Conexion();

$sql=$conn->prepare("SELECT
	a.id_alumno,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.curp,a.telefono,a.correo,a.genero,a.fecha_nacimiento,a.edad,a.estado,a.municipio,a.colonia,a.calle,a.Ninterior,a.Nexterior,a.nacionalidad,a.estado_civil,a.password,a.fotografia,a.status,
	g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
	c.id_calificacion,c.id_alumno,c.id_materia,c.calificacion,c.creditos,c.acumulado
	FROM alumno a
	INNER JOIN grupos  g      ON g.id_create_grupo = a.id_create_grupo
	INNER JOIN calificacion c ON c.id_alumno = a.id_alumno
	WHERE a.matricula = :user");
$sql->bindParam(':user',$_SESSION['sica-alumno']);
$sql->execute();
$row = $sql->fetch();
// -------------------------------------
$id  = $row['id_alumno'];
$reprovada = 0;
$no_aplica = 3;

$sql2 = $conn->prepare("SELECT id_alumno,SUM(creditos) AS total FROM calificacion where id_alumno = :id");
$sql2->bindParam(':id',$id);
$sql2->execute();
$credito = $sql2->fetch();
// --------------------------------------
$credito_materia = $conn->prepare('SELECT SUM(credito) AS total_credito FROM materias');
$credito_materia->execute();
$total_credito = $credito_materia->fetch();
// --------------------------------------
$count_mat = $conn->prepare("SELECT id_alumno, creditos, count(*) AS aprovada
FROM calificacion WHERE id_alumno =:id AND creditos != :reprovada");
$count_mat->bindParam(':id',$id);
$count_mat->bindParam(':reprovada',$reprovada);
$count_mat->execute();
$aprovada= $count_mat->fetch();
// ---------------------------------------

$count = $conn->prepare("SELECT id_alumno,creditos, count(*) as reprovada
FROM calificacion
WHERE id_alumno = :id
AND creditos = :reprovada");
$count->bindParam(':id',$id);
$count->bindParam(':reprovada',$reprovada);
$count->execute();
$reprovada= $count->fetch();
// ---------------------------------
$count_NA = $conn->prepare("SELECT id_alumno,id_tipo_evaluacion,count(*) AS noAplica FROM calificacion WHERE id_alumno = :id AND id_tipo_evaluacion = :no_aplica");
$count_NA->bindParam(':id',$id);
$count_NA->bindParam(':no_aplica',$no_aplica);
$count_NA->execute();
$NA= $count_NA->fetch();
// ----------------------------------
$numMateria = $conn->prepare("SELECT id_alumno,id_materia,count(*) AS materia FROM calificacion WHERE id_alumno = :id");
$numMateria->bindParam(':id',$id);
$numMateria->execute();
$Nmateria = $numMateria->fetch();


 ?>

