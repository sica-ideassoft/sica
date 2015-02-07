<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

$id = $_POST["id"];
$sql = "SELECT *
FROM maestro m
INNER JOIN user_maestro u ON m.id_maestro =  u.id_maestro where m.id_maestro and u.id_maestro = '".$id."'";
$query = $conn->query($sql);
while($filas=$query->fetch()){

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