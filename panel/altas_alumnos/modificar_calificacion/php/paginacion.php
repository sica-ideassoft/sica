<?php
$conn =  new Conexion();
include_once("../../../conexion/PDO_Pagination.php");
$pagination = new PDO_Pagination($conn);

$user = $_SESSION['admin-sica'];
$search = null;
if(isset($_REQUEST["search"]) && $_REQUEST["search"] != "")
{
$search = htmlspecialchars($_REQUEST["search"]);
$pagination->param = "&search=$search";
$pagination->rowCount("SELECT
m.id_materia,m.claveSEP,m.nombre_materia,
g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
o.id_maestro,o.nombre,
a.id_alumno,a.matricula,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,
u.id_login_maestro,u.id_maestro,u.user,
c.id_create_grupo,c.create_grupo,c.create_grado
FROM materias m
INNER JOIN grupos g       ON g.id_materia = m.id_materia
INNER JOIN create_grupo c ON c.id_create_grupo = g.id_create_grupo
INNER JOIN maestro o      ON o.id_maestro = g.id_maestro
INNER JOIN alumno  a      ON a.id_create_grupo   = g.id_create_grupo
INNER JOIN user_maestro u ON u.id_maestro = o.id_maestro

	WHERE a.nombre_alumno LIKE '%$search%' OR a.A_paterno_alumno LIKE '%$search%' OR a.A_materno_alumno LIKE '%$search%' OR m.nombre_materia LIKE '%$search%' OR c.create_grado LIKE '%$search%'");
	$pagination->config(3, 5);
	$sql = "SELECT
m.id_materia,m.claveSEP,m.nombre_materia,m.fecha_inicio,m.fecha_fin,m.credito,m.cal_min,
g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
o.id_maestro,o.nombre,
a.id_alumno,a.matricula,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,
u.id_login_maestro,u.id_maestro,u.user,
c.id_create_grupo,c.create_grupo,c.create_grado
FROM materias m
INNER JOIN grupos g       ON g.id_materia = m.id_materia
INNER JOIN create_grupo c ON c.id_create_grupo = g.id_create_grupo
INNER JOIN maestro o      ON o.id_maestro = g.id_maestro
INNER JOIN alumno  a      ON a.id_create_grupo   = g.id_create_grupo
INNER JOIN user_maestro u ON u.id_maestro = o.id_maestro

	WHERE a.nombre_alumno LIKE '%$search%' OR a.A_paterno_alumno LIKE '%$search%' OR a.A_materno_alumno LIKE '%$search%' OR m.nombre_materia LIKE '%$search%' ORDER BY a.id_alumno OR c.create_grado LIKE '%$search%' ASC LIMIT $pagination->start_row,$pagination->max_rows";
	$query = $conn->prepare($sql);
	$query->execute();

	$model = array();

	while($rows = $query->fetch())
	{
		$model[] = $rows;
	}
}
else
{
	$pagination->rowCount("SELECT * FROM alumno");
	$pagination->config(3, 7);


$evaluar = $conn->prepare("SELECT  c.id_calificacion,c.id_alumno,c.id_materia,c.creditos,c.calificacion,c.id_tipo_evaluacion,c.acumulado,
	a.id_alumno,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.status
	FROM calificacion c
	INNER JOIN alumno a ON a.id_alumno = c.id_alumno");
$evaluar->execute();
while($eval=$evaluar->fetch()){
	$eval['id_alumno'];
}


$sqll=$conn->prepare("SELECT
m.id_materia,m.claveSEP,m.nombre_materia,m.fecha_inicio,m.fecha_fin,m.credito,m.cal_min,
g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
o.id_maestro,o.nombre,
a.id_alumno,a.matricula,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,
u.id_login_maestro,u.id_maestro,u.user,
c.id_create_grupo,c.create_grupo,c.create_grado
-- n.id_calificacion,n.id_alumno,n.calificacion
FROM materias m
INNER JOIN grupos g       ON g.id_materia = m.id_materia
INNER JOIN create_grupo c ON c.id_create_grupo = g.id_create_grupo
INNER JOIN maestro o      ON o.id_maestro = g.id_maestro
INNER JOIN alumno  a      ON a.id_create_grupo   = g.id_create_grupo
INNER JOIN user_maestro u ON u.id_maestro = o.id_maestro
-- LEFT OUTER JOIN calificacion n ON n.id_alumno = a.id_alumno

 ORDER BY m.id_materia ASC LIMIT $pagination->start_row, $pagination->max_rows");
$sqll->bindParam(':user',$user);
$sqll->execute();
	$model = array();
	while($rows = $sqll->fetch())
	{

		$model[] = $rows;
	}
}

?>