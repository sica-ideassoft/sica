<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

// $busca=$_POST['name'];
$busca= "%".$_POST['name']."%";
if($busca!=""){
$busqueda=mysql_query("SELECT
	g.id_grupo,g.id_maestro,g.id_materia,g.grado,g.grupo,
	m.id_maestro,m.nombre,
	a.id_materia,a.nombre_materia
    FROM grupos g
    INNER JOIN maestro m ON m.id_maestro = g.id_maestro
    INNER JOIN materias a ON g.id_materia = a.id_materia
    WHERE a.nombre_materia LIKE '%".$busca."%' OR m.nombre LIKE '%".$busca."%' OR g.grado LIKE '%".$busca."%' OR g.grupo LIKE '%".$busca."%'");

// $row=mysql_fetch_array($busqueda);
	//

	if(mysql_num_rows($busqueda)==0) {
	?>
		<tr>
			<td colspan='5'>El grupo no existe</td>
		</tr>

	<?php
	}
	while($f=mysql_fetch_array($busqueda)){

	?>
			<tr>
				<td><?php echo $f['nombre_materia'];?></td>
				<td><?php echo $f['nombre'];?></td>
				<td><?php echo $f['grado'];?></td>
				<td><?php echo $f['grupo'];?></td>
	?>
<?php
}

}

?>