<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

if (!isset($_SESSION['admin-sica'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../../login_admin/index.php";
</script>';
}

$consulta=$conn->prepare("SELECT * from admin where user =:user");
$consulta->bindParam(':user',$_SESSION['admin-sica']);
$consulta->execute();
while($filas=$consulta->fetch()){

	$imagen=$filas['imagen'];
	$usuario=$filas['user'];
	$pass=$filas['password'];

?>

 <figure class="miniatura">
       <img src="<?php echo $imagen;?>"/>
 </figure>


<?php }?>