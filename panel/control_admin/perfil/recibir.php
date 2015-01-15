<?php
session_start();
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

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$usuario=$_POST['usuario'];
$pass=$_POST['password'];


$sql = "UPDATE admin set imagen = '".$rutaDestino."',user = '".$usuario."',password = '".$pass."' WHERE  user ='".$user."'";

$res=mysql_query($sql);

if ($res){
	header("location:../../logout.php");
}else{
    echo 'no se pudo modificar';
}

?>