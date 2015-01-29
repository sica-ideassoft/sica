<?php
include_once("../conectar.php");
$conn = new DB();
$conn->conectar();

$id = $_POST["id"];

$consulta = mysql_query("SELECT *
FROM maestro m
INNER JOIN user_maestro u ON m.id_maestro =  u.id_maestro where m.id_maestro and u.id_maestro = '".$id."'");
while($filas=mysql_fetch_array($consulta)){

	$destino = "../../../maestros/control/perfil/";

	$ruta=$filas['imagen'];
	$ruta = $destino.$ruta;
	$user=$filas['nombre'];



?>

 <figure class='foto'>
       <img src="<?php echo $ruta ;?>" width="119" height="139"/>
 </figure>
 <div class="content-name">
       <label for="" class="name"><?php echo $user ;?></label>
 </div>


<?php }?>