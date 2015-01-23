<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

// $busca=$_POST['name'];
$busca= "%".$_POST['name']."%";
if($busca!=""){
$busqueda=mysql_query("SELECT * FROM maestro WHERE nombre LIKE '%".$busca."%' OR A_paterno LIKE '%".$busca."%' OR A_materno LIKE '%".$busca."%'");

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
				<td><?php echo $f['nombre'];?></td>
				<td><?php echo $f['A_paterno'];?></td>
				<td><?php echo $f['A_materno'];?></td>
				<td><?php echo $f['telefono'];?></td>
	?>
		<td class="lia"><a href="mostrar_grupo.php?id=<?php echo $f['id_maestro'] ?>"><span class="mas"></span></a></td></tr>
<?php
}

}

?>