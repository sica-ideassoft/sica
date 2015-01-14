<?php
include_once("../conectar.php");
$conn = new DB();
$conn->conectar();

$consulta=mysql_query("SELECT * from img_admin where id_img_admin = 9");
while($filas=mysql_fetch_array($consulta)){

	$ruta=$filas['direccion'];
	$usuario=$filas['user'];
	$pass=$filas['password'];

?>

 <figure class="miniatura">
       <img src="<?php echo $ruta;?>"/>
 </figure>


<?php }?>