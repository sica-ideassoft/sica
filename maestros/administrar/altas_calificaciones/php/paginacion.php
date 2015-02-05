<?php
$user = $_SESSION['maestro-session'];
$search = null;
if(isset($_REQUEST["search"]) && $_REQUEST["search"] != "")
{
$search = htmlspecialchars($_REQUEST["search"]);
$pagination->param = "&search=$search";
$pagination->rowCount("SELECT
m.id_materia,m.claveSEP,m.nombre_materia,/*materia*/
g.id_grupo,g.id_maestro,g.id_materia,g.grupo, /*grupo*/
o.id_maestro,o.nombre,/*maestro*/
a.id_alumno,a.id_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.status,/*alumno*/
u.id_login_maestro,u.id_maestro,u.user/*user_maestro*/
FROM materias m
INNER JOIN grupos g       ON g.id_materia = m.id_materia
INNER JOIN maestro o      ON o.id_maestro = g.id_maestro
INNER JOIN alumno  a      ON a.id_grupo   = g.id_grupo
INNER JOIN user_maestro u ON u.id_maestro = o.id_maestro
and u.user = '".$user."'
	WHERE a.nombre_alumno LIKE '%$search%' OR a.A_paterno_alumno LIKE '%$search%' OR a.A_materno_alumno LIKE '%$search%'");
	$pagination->config(3, 5);
	$sql = "SELECT
m.id_materia,m.claveSEP,m.nombre_materia,/*materia*/
g.id_grupo,g.id_maestro,g.id_materia,g.grupo, /*grupo*/
o.id_maestro,o.nombre,/*maestro*/
a.id_alumno,a.id_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.status,/*alumno*/
u.id_login_maestro,u.id_maestro,u.user/*user_maestro*/
FROM materias m
INNER JOIN grupos g       ON g.id_materia = m.id_materia
INNER JOIN maestro o      ON o.id_maestro = g.id_maestro
INNER JOIN alumno  a      ON a.id_grupo   = g.id_grupo
INNER JOIN user_maestro u ON u.id_maestro = o.id_maestro
and u.user = '".$user."'
	WHERE a.nombre_alumno LIKE '%$search%' OR a.A_paterno_alumno LIKE '%$search%' OR a.A_materno_alumno LIKE '%$search%' ORDER BY a.id_alumno ASC LIMIT $pagination->start_row,$pagination->max_rows";
	$query = $connection->prepare($sql);
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
	$sql = "SELECT
m.id_materia,m.claveSEP,m.nombre_materia,/*materia*/
g.id_grupo,g.id_maestro,g.id_materia,g.grupo, /*grupo*/
o.id_maestro,o.nombre,/*maestro*/
a.id_alumno,a.id_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.status,/*alumno*/
u.id_login_maestro,u.id_maestro,u.user/*user_maestro*/
FROM materias m
INNER JOIN grupos g       ON g.id_materia = m.id_materia
INNER JOIN maestro o      ON o.id_maestro = g.id_maestro
INNER JOIN alumno  a      ON a.id_grupo   = g.id_grupo
INNER JOIN user_maestro u ON u.id_maestro = o.id_maestro
and u.user = '".$user."'
	ORDER BY a.id_alumno ASC LIMIT $pagination->start_row, $pagination->max_rows";
	$query = $connection->prepare($sql);
	$query->execute();
	$model = array();

	while($rows = $query->fetch())
	{
		$model[] = $rows;
	}
}

?>