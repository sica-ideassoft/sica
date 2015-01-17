<?php
session_start();
if (!isset($_SESSION['maestro-session'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../login_maestro/index.php";
</script>';
}
$user = $_SESSION['maestro-session'];

?>
<?php
include_once("../conectar.php");
$conn = new DB();
$conn->conectar();

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$usuario=$_POST['usuario'];
$pass=$_POST['password'];


$sql = "UPDATE user_maestro set imagen = '".$rutaDestino."',user = '".$usuario."',password = '".$pass."' WHERE  user ='".$user."'";

$res=mysql_query($sql);

if ($res){
	header("location:../../logout.php");
}else{
    echo 'no se pudo modificar';
}

?>