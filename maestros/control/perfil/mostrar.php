<?php
  include_once("../../../conexion/conexion.php");
  $conn = new Conexion();

if (!isset($_SESSION['maestro-session'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../login_maestro/index.php";
</script>';
}
$user = $_SESSION['maestro-session'];

$sql = "SELECT * from user_maestro where user ='".$user."'";
$query = $conn->query($sql);

while($filas=$query->fetch()){

	$ruta=$filas['imagen'];
	$usuario=$filas['user'];
	$pass=$filas['password'];

?>

 <figure class='perfil'>
       <img src="<?php echo $ruta ;?>" width="119" height="139"/>
 </figure>


<?php }?>