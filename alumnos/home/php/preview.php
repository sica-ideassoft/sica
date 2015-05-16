<?php
// include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$url = "php/";
$sql ="SELECT id_avisos,aviso,prioridad,link FROM avisos ORDER BY id_avisos desc";
$query=$conn->query($sql);
while($row = $query->fetch()){
	?>
	<div class="mes-cont <?php echo $row['prioridad'];?>">
		<div class="mes-principal">
			<p><?php echo $row['aviso'];?></p>
		</div>
		<div class="" id="leyent">
		<a href="<?php echo $row['link'];?>"><?php echo $row['link'];?></a>
		<p id="prioridad"><?php echo $row['prioridad'];?></p>
		</div>


	</div>

<?php
}

