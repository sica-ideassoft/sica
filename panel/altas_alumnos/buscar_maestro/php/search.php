<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

// $busca=$_POST['name'];
$busca= "%".$_POST['name']."%";
if($busca!=""){
$busqueda=mysql_query("SELECT * FROM maestro WHERE nombre LIKE '%".$busca."%' OR A_paterno LIKE '%".$busca."%' OR A_materno LIKE '%".$busca."%'
	OR telefono LIKE '%".$busca."%'");

// $row=mysql_fetch_array($busqueda);
	//

	if(mysql_num_rows($busqueda)==0) {
	?>
		<tr>
			<td colspan='5'>El maestro no existe</td>
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


