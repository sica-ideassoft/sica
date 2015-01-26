<?php
$search = null;
if(isset($_REQUEST["search"]) && $_REQUEST["search"] != "")
{
	$search = htmlspecialchars($_REQUEST["search"]);
	$pagination->param = "&search=$search";
	$pagination->rowCount("SELECT
	a.id_alumno,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.id_grupo,
	g.grado,g.grupo,g.id_grupo
	FROM alumno a
	INNER JOIN grupos g ON g.id_grupo = a.id_grupo
	WHERE a.nombre_alumno LIKE '%$search%' OR a.A_paterno_alumno LIKE '%$search%' OR a.A_materno_alumno LIKE '%$search%'");
	$pagination->config(3, 5);
	$sql = "SELECT
	a.id_alumno,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.id_grupo,
	g.grado,g.grupo,g.id_grupo
	FROM alumno a
	INNER JOIN grupos g ON g.id_grupo = a.id_grupo
	WHERE a.nombre_alumno LIKE '%$search%' OR a.A_paterno_alumno LIKE '%$search%' OR a.A_materno_alumno LIKE '%$search%' ORDER BY a.id_alumno ASC LIMIT $pagination->start_row, $pagination->max_rows";
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
	$sql = "SELECT a.id_alumno,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.id_grupo,
	g.grado,g.grupo,g.id_grupo
	FROM alumno a
	INNER JOIN grupos g ON g.id_grupo = a.id_grupo
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