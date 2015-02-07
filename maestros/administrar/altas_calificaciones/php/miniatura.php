<?php
include_once("../../../conexion/conexion.php");
$conn =  new Conexion();

if (!isset($_SESSION['maestro-session'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../../login_admin/index.php";
</script>';
}
$user = $_SESSION['maestro-session'];

$sql = "SELECT * FROM user_maestro where user ='".$user."'";
$query = $conn->query($sql);
while($filas=$query->fetch()){
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