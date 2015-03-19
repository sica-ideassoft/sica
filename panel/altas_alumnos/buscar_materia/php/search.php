<?php
  include_once("../../../../conexion/conexion.php");
  $conn = new Conexion();

// $busca=$_POST['name'];
$busca= "%".$_POST['name']."%";
if($busca!=""){
$sql = "SELECT * FROM materias
WHERE nombre_materia LIKE '%".$busca."%' OR claveSEP LIKE '%".$busca."%' OR credito LIKE '%".$busca."%' OR cal_min LIKE '%".$busca."%' ORDER BY claveSEP asc ";
$query = $conn->query($sql);

	if($query->rowCount()==0) {
	?>
		<tr class= "existe">
			<td  colspan='9'>La matería no existe</td>
		</tr>

	<?php
	}
	while($f=$query->fetch()){


	?>
		<tr>
		<td class= "nombre"><?php echo $f['nombre_materia']?></td>
		<td><?php echo $f['claveSEP']?></td>
		<td><?php echo $f['fecha_inicio']?></td>
		<td><?php echo $f['fecha_fin']?></td>
		<td><?php echo $f['credito']?></td>
		<td><?php echo $f['cal_min']?></td>
		<td><?php echo $f['ciclo']?></td>
		?>
<?php
}

}

?>