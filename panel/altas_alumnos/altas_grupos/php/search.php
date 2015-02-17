<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$busca= "%".$_POST['name']."%";
if($busca!=""){
$busqueda="SELECT
	g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
	m.id_materia,m.claveSEP,m.nombre_materia,m.fecha_inicio,m.fecha_fin,m.credito,m.cal_min,
	o.id_maestro,o.nombre,o.A_paterno,o.A_materno,o.clave,o.curp,o.telefono,o.correo,o.genero,o.edad,o.estado_civil,o.fecha_nacimiento,o.Estado,o.municipio,o.calle,o.Ninterior,o.Nexterior,o.nacionalidad,
	c.id_create_grupo,c.create_grupo,c.create_grado
    FROM grupos g
    INNER JOIN materias m ON m.id_materia = g.id_materia
    INNER JOIN maestro o ON o.id_maestro = g.id_maestro
    INNER JOIN create_grupo c ON c.id_create_grupo = g.id_create_grupo
    WHERE m.nombre_materia LIKE '%".$busca."%' OR o.nombre LIKE '%".$busca."%'
    OR c.create_grado LIKE '%".$busca."%' OR c.create_grupo LIKE '%".$busca."%'";
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
<td><?php echo $f['create_grado'];?></td>
<td><?php echo $f['create_grupo'];?></td>


	?>
<?php
}

}
