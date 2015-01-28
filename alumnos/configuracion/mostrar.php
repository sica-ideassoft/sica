<?php

if (!isset($_SESSION['alumno'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../login_alumno/index.php";
</script>';
}
$user = $_SESSION['alumno'];
?>

<?php
include_once("../conectar.php");
$conn = new DB();
$conn->conectar();

$consulta=mysql_query("SELECT * from user_maestro where user ='".$user."'");
while($filas=mysql_fetch_array($consulta)){

	$ruta=$filas['imagen'];
	$usuario=$filas['user'];
	$pass=$filas['password'];

?>

 <figure class='perfil'>
       <img src="<?php echo $ruta ;?>" width="119" height="139"/>
 </figure>


<?php }?>