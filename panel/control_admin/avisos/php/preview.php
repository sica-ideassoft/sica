<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$url = "php/";
$sql ="SELECT id_avisos,aviso,imagen,prioridad,link FROM avisos ORDER BY id_avisos desc";
$query=$conn->query($sql);
while($row = $query->fetch()){
	?>
	<div class="mes-cont">
	<div class="cerrar">
	<form action="php/delete.php" method='POST'>
		<input type="hidden" name="id" value="<?php echo $row['id_avisos'];?>">
		<input type="submit" class="btnEliminar" value="X">
	</form>

	</div>
	<img src="<?php echo $url.$row['imagen']; ?>" alt="">
		<div class="mes-principal">
		<span id="leyenda"><?php echo $row['prioridad'];?></span>
			<p><?php echo $row['aviso'];?></p>
		</div>
		<div class="" id="leyent">

			<a href=""><?php echo $row['link']; ?></a>
		</div>
	</img>
</div>
<?php
}

