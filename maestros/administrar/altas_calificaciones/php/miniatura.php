<?php
include_once("../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

if (!isset($_SESSION['maestro-session'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../../login_admin/index.php";
</script>';
}
$user = $_SESSION['maestro-session'];
 ?>
<?php

$consulta=mysql_query("SELECT * FROM user_maestro where user ='".$user."'");

while($filas=mysql_fetch_array($consulta)){
	$url = "../../control/perfil/";
	$imagen=$filas['imagen'];

	$dir = $url.$imagen;



	$usuario=$filas['user'];
	$pass=$filas['password'];

?>

 <figure class="miniatura">
       <img src="<?php echo $dir;?>"/>
 </figure>


<?php }?>