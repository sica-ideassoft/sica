<?php
include_once("../../../../conexion/conexion.php");
$conn =  new Conexion();
session_start();
if (!isset($_SESSION['maestro-session'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../../login_maestro/index.php";
</script>';
}
$busca= "%".$_POST['name']."%";
if($busca!=""){
$sql =$conn->prepare("SELECT
g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
m.id_materia,m.claveSEP,m.nombre_materia,m.credito,m.cal_min,
o.id_maestro,o.nombre,
u.id_login_maestro,u.id_maestro,u.user,
c.id_create_grupo,c.create_grupo,c.create_grado
FROM materias m
INNER JOIN grupos g ON m.id_materia = g.id_materia
INNER JOIN maestro o  ON o.id_maestro = g.id_maestro
INNER JOIN user_maestro u ON  u.id_maestro = o.id_maestro
INNER JOIN create_grupo c ON  c.id_create_grupo = g.id_create_grupo
and u.user = :user WHERE m.nombre_materia LIKE :buscar OR o.nombre LIKE :buscar OR c.create_grado LIKE :buscar ");
$sql->bindParam(':user',$_SESSION['maestro-session']);
$sql->bindParam(':buscar',$busca);
$sql->execute();
	if($sql->rowCount()==0) {
	?>
		<tr class= "existe">
			<td  colspan='7'>La matería no existe</td>
		</tr>

	<?php
	}
	while($f=$sql->fetch()){

	?>
		<tr>
		<td class= "nombre"><?php echo $f['nombre_materia']?></td>
		<td><?php echo $f['nombre']?></td>
		<td><?php echo $f['credito']?></td>
		<td><?php echo $f['cal_min']?></td>
		<td class="peque"><?php echo $f['create_grado']?></td>
		<td class="peque"><?php echo $f['create_grupo']?></td>
		?>
		<td>
        <form action="mostrar_materias.php" name="formulario1" method="post">
        <input type="hidden" name="id" value="<?php echo $f['id_materia']?>"/>
        <button name="enviar"class="botton"><span class="mas"></span></button>
        </form>
        </td>

		</tr>
<?php
}

}

?>