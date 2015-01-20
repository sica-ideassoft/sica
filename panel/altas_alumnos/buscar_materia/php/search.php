<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

// $busca=$_POST['name'];
$busca= "%".$_POST['name']."%";
if($busca!=""){
$busqueda=mysql_query("SELECT * FROM materias WHERE nombre LIKE '%".$busca."%' OR profesor LIKE '%".$busca."%'");

// $row=mysql_fetch_array($busqueda);
	//

	if(mysql_num_rows($busqueda)==0) {
	?>
		<tr>
			<td colspan='5'>El alumno no existe</td>
		</tr>

	<?php
	}
	while($f=mysql_fetch_array($busqueda)){

	?>
		<tr>
		<td><?php echo $f['nombre']?></td>
		<td><?php echo $f['profesor']?></td>
		<td><?php echo $f['credito']?></td>
		<td><?php echo $f['cal_min']?></td>
		?>

		<td class="lia"><a href="mostrar_materias.php?id=<?php echo $f['id_materia']?>"><span class="mas"></span></a></td>
		</tr>
<?php
}

}

?>