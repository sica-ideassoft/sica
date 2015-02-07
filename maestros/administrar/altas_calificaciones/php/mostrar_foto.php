<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();
$id = $_POST["id"];

$sql = "SELECT * FROM alumno where id_alumno = '".$id."'";
$query = $conn -> query($sql);
while($filas=$query->fetch()){

	$destino = "../../../alumnos/home/php/";
	$ruta=$filas['fotografia'];
	$ruta = $destino.$ruta;
	$user=$filas['nombre_alumno'];



?>

 <figure class='foto'>
       <img src="<?php echo $ruta ;?>" width="119" height="139"/>
 </figure>
 <div class="content-name">

       <label for="" class="name"><?php echo $user ;?></label>
 </div>
 <div class="content-name">
       <label for="" class="" id='status'><?php echo $filas["status"];?></label>
 </div>

<?php }?>