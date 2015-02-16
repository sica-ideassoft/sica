<?php
if (!isset($_SESSION['sica-alumno'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../login_alumno/index.php";
</script>';
}
include_once("../../conexion/conexion.php");
$conn = new Conexion();

$sql = $conn->prepare("SELECT fotografia,nombre_alumno FROM alumno where matricula =:matricula");
$sql->bindParam(':matricula',$_SESSION['sica-alumno']);
$sql->execute();
$filas=$sql->fetch();

	$url = "../home/php/";
	$imagen=$filas['fotografia'];
	$dir = $url.$imagen;
?>
     <img src="<?php echo $dir;?>"/>
