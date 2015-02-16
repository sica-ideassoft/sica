<?php
$conn =  new Conexion();
include_once("../../../conexion/PDO_Pagination.php");
$pagination = new PDO_Pagination($conn);

$user = $_SESSION['maestro-session'];
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
and u.user = '".$user."'
	WHERE a.nombre_alumno LIKE '%$search%' OR a.A_paterno_alumno LIKE '%$search%' OR a.A_materno_alumno LIKE '%$search%'");
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
and u.user = '".$user."'
	WHERE a.nombre_alumno LIKE '%$search%' OR a.A_paterno_alumno LIKE '%$search%' OR a.A_materno_alumno LIKE '%$search%' ORDER BY a.id_alumno ASC LIMIT $pagination->start_row,$pagination->max_rows";
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
and u.user = :user WHERE a.id_alumno NOT IN (SELECT id_alumno from calificacion)
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