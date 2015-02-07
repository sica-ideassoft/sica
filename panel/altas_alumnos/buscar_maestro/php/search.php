<?php
include_once("../../../../conexion/conexion.php");
$conn= new Conexion();

$busca= "%".$_POST['name']."%";
if($busca!=""){
$sql = "SELECT * FROM maestro WHERE nombre LIKE '%".$busca."%' OR A_paterno LIKE '%".$busca."%' OR A_materno LIKE '%".$busca."%'
	OR telefono LIKE '%".$busca."%'";

$query = $conn->query($sql);

	if($query->rowCount()==0) {
	?>
		<tr>
			<td colspan='5'>El maestro no existe</td>
		</tr>

	<?php
	}
	while($f=$query->fetch()){

	?>
			<tr>
				<td><?php echo $f['nombre'];?></td>
				<td><?php echo $f['A_paterno'];?></td>
				<td><?php echo $f['A_materno'];?></td>
				<td><?php echo $f['telefono'];?></td>
				<td>
				<form action="mostrar_maestros.php" name="formulario1" method="post">
				<input type="hidden" name="id" value="<?php echo $f['id_maestro'];?>"/>
				<button name="enviar"class="botton"><span class="mas"></span></button>
				</form>
				</td></tr>

<?php
}

}

?>


