<?php
include_once("../conectar.php");
$conn = new DB();
$conn->conectar();

$id = $_POST["id"];

$consulta = mysql_query("SELECT * FROM alumno where id_alumno = '".$id."'");

while($filas=mysql_fetch_array($consulta)){

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