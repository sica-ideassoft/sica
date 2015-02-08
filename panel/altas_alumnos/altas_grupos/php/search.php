<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$busca= "%".$_POST['name']."%";
if($busca!=""){
$busqueda="SELECT
	g.id_grupo,g.id_maestro,g.id_materia,g.grupo,
	m.id_maestro,m.nombre,
	a.id_materia,a.nombre_materia
    FROM grupos g
    INNER JOIN maestro m ON m.id_maestro = g.id_maestro
    INNER JOIN materias a ON g.id_materia = a.id_materia
    WHERE a.nombre_materia LIKE '%".$busca."%' OR m.nombre LIKE '%".$busca."%'OR g.grupo LIKE '%".$busca."%'";
    $query= $conn->query($busqueda);

	if($query->rowCount()==0) {
	?>
		<tr>
			<td colspan='5'>El grupo no existe</td>
		</tr>

	<?php
	}
	while($f=$query->fetch()){

	?>
<tr>
<td><?php echo $f['nombre_materia'];?></td>
<td><?php echo $f['nombre'];?></td>
<td><?php
$grado = substr($f['grupo'], -2,1);
echo $grado;
?></td>

<td>
<?php

$grupo = substr($f['grupo'], -1);
echo $grupo;
?>
</td>

	?>
<?php
}

}
