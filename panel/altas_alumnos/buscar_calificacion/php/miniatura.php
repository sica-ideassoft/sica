<?php
if (!isset($_SESSION['admin-sica'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../../login_admin/index.php";
</script>';
}
$user = $_SESSION['admin-sica'];
include_once("../../../conexion/conexion.php");
  $conn = new Conexion();

$sql = "SELECT * FROM admin where user ='".$user."'";
$query = $conn->query($sql);
while($filas=$query->fetch()){
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