<?php
if (!isset($_SESSION['admin-sica'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../../login_admin/index.php";
</script>';
}
$user = $_SESSION['admin-sica'];
?>

<?php
include_once("../conectar.php");
$conn = new DB();
$conn->conectar();

$consulta=mysql_query("SELECT * from admin where user ='".$user."'");
while($filas=mysql_fetch_array($consulta)){
	$url = "../perfil/";
	$imagen=$filas['imagen'];
	$dir = $url.$imagen;

	$usuario=$filas['user'];
	$pass=$filas['password'];

?>

 <figure class="miniatura">
       <img src="<?php echo $dir;?>"/>
 </figure>


<?php }?>