<?php
include_once("../conectar.php");
$conn = new DB();
$conn->conectar();

$user = $_SESSION['maestro-session'];

$query =  mysql_query("SELECT nombre_materia FROM materias where profesor = '".$user."'");

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