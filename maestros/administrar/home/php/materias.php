<?php
include_once("../conectar.php");
$conn = new DB();
$conn->conectar();

$user = $_SESSION['maestro-session'];

$query =  mysql_query("SELECT
g.id_grupo,g.id_maestro,g.id_materia,g.grado,g.grupo,
m.id_materia,m.claveSEP,m.nombre_materia,
o.id_maestro,o.nombre,
u.id_login_maestro,u.id_maestro,u.user
FROM materias m
INNER JOIN grupos g ON m.id_materia = g.id_materia
INNER JOIN maestro o  ON o.id_maestro = g.id_maestro
INNER JOIN user_maestro u ON  u.id_maestro = o.id_maestro
and u.user = '$user'");
?>
<div class="content-materias">
	<div class="title-materias">
		<p>materias impartidas</p>
		<div class='pico'></div>
	</div>
	<?php
	while ($row =mysql_fetch_array($query)) {
		?>
		<div class="materias">
			<p>
				<?php echo $row["nombre_materia"];  ?>
			</p>
			<div class='pico'></div>
		</div>
		<?php
	}
	?>
</div>
<?php

?>