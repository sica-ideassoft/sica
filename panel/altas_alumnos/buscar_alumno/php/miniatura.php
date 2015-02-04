<?php
include_once("../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

if (!isset($_SESSION['admin-sica'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../../login_admin/index.php";
</script>';
}
$user = $_SESSION['admin-sica'];
?>

<?php

$consulta=mysql_query("SELECT * FROM admin where user ='".$user."'");

while($filas=mysql_fetch_array($consulta)){
	$url = "../../control_admin/perfil/";
	$imagen=$filas['imagen'];

	$dir = $url.$imagen;

	$usuario=$filas['user'];
	$pass=$filas['password'];

?>

 <figure class="miniatura">
       <img src="<?php echo $dir;?>"/>
 </figure>


<?php }?>