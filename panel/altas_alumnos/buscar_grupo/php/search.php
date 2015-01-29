<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

// $busca=$_POST['name'];
$busca= "%".$_POST['name']."%";
if($busca!=""){


$busqueda=mysql_query("SELECT  g.id_grupo,g.id_maestro,g.id_materia,g.grado,g.grupo,m.id_maestro,m.nombre,s.id_materia,s.nombre_materia
	FROM grupos g
	INNER JOIN maestro m ON g.id_maestro = m.id_maestro
	INNER JOIN materias s ON g.id_materia = s.id_materia
	WHERE m.nombre LIKE '%".$busca."%' OR s.nombre_materia LIKE '%".$busca."%'");

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
		 		<td>
                <form action="mostrar_grupo.php" name="formulario1" method="post">
                <input type="hidden" name="id" value="<?php echo $f['id_maestro']?>"/>
                <button name="enviar"class="botton"><span class="mas"></span></button>
                </form>
                </td>

<?php
}

}

?>