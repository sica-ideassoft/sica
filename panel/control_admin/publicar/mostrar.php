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

$consulta=mysql_query("SELECT * from admin where user ='".$user."'");
while($filas=mysql_fetch_array($consulta)){

	$ruta=$filas['imagen'];
	$usuario=$filas['user'];
	$pass=$filas['password'];

?>
<!--
 <figure class='pree-banner'>
       <img src="<?php echo $ruta ;?>" width="200" height="100"/>
 </figure>
 -->

<?php }?>