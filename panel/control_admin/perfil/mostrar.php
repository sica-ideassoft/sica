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

 <figure class='perfil'>
       <img src="<?php echo $ruta;?>" width="119" height="139"/>
 </figure>


<?php }?>