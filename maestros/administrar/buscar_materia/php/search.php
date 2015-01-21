<?php
session_start();
if (!isset($_SESSION['maestro-session'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../../login_maestro/index.php";
</script>';
}
$user = $_SESSION['maestro-session'];
?>
<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();

// $busca=$_POST['name'];
$busca= "%".$_POST['name']."%";
if($busca!=""){
$busqueda=mysql_query("SELECT m.id_materia,m.profesor,m.nombre_materia,m.nombre_materia,m.credito,m.cal_min,u.id_maestro,u.user,o.id_maestro,o.nombre
FROM materias m
INNER JOIN user_maestro u ON  m.profesor = u.user
INNER JOIN maestro o  ON o.id_maestro =  u.id_maestro
WHERE m.nombre_materia LIKE '%".$busca."%' and m.profesor = '".$user."' ");


	if(mysql_num_rows($busqueda)==0) {
	?>
		<tr class= "existe">
			<td  colspan='5'>El alumno no existe</td>
		</tr>

	<?php
	}
	while($f=mysql_fetch_array($busqueda)){

	?>
		<tr>
		<td class= "nombre"><?php echo $f['nombre_materia']?></td>
		<td><?php echo $f['nombre']?></td>
		<td><?php echo $f['credito']?></td>
		<td><?php echo $f['cal_min']?></td>
		?>

		<td class="lia"><a href="mostrar_materias.php?id=<?php echo $f['id_materia']?>"><span class="mas"></span></a></td>
		</tr>
<?php
}

}

?>