<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$sql = "SELECT
		a.id_alumno,a.id_create_grupo,
        g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
        m.id_maestro
		FROM grupos g
		INNER JOIN maestro m  ON m.id_maestro = g.id_maestro
		INNER JOIN alumno  a  ON a.id_create_grupo = g.id_create_grupo";
$query = $conn->query($sql);
$array_alumno = array();

while($row = $query->fetch()){
	$array_alumno[]= $row;

}
$alumnos = json_encode($array_alumno);

?>