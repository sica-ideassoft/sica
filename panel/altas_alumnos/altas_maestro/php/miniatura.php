<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

if (!isset($_SESSION['admin-sica'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../../login_admin/index.php";
</script>';
}

$sql= $conn->prepare("SELECT * FROM admin where user =:user");
$sql->bindParam('user',$_SESSION['admin-sica']);
$sql->execute();
while($filas=$sql->fetch()){
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