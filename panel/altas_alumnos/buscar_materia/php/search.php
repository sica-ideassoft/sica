<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

// $busca=$_POST['name'];
$busca= "%".$_POST['name']."%";
if($busca!=""){
$busqueda=mysql_query("SELECT * FROM materias
WHERE nombre_materia LIKE '%".$busca."%' OR claveSEP LIKE '%".$busca."%' OR credito LIKE '%".$busca."%' OR cal_min LIKE '%".$busca."%' ORDER BY claveSEP asc ");


	if(mysql_num_rows($busqueda)==0) {
	?>
		<tr class= "existe">
			<td  colspan='9'>La matería no existe</td>
		</tr>

	<?php
	}
	while($f=mysql_fetch_array($busqueda)){


	?>
		<tr>
		<td class= "nombre"><?php echo $f['nombre_materia']?></td>
		<td><?php echo $f['claveSEP']?></td>
		<td><?php echo $f['fecha_inicio']?></td>
		<td><?php echo $f['fecha_fin']?></td>
		<td><?php echo $f['credito']?></td>
		<td><?php echo $f['cal_min']?></td>
		?>
<?php
}

}

?>