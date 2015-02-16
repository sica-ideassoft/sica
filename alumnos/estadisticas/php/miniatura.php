<?php
if (!isset($_SESSION['sica-alumno'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../login_alumno/index.php";
</script>';
}
include_once("../../conexion/conexion.php");
$conn = new Conexion();

$ssql=$conn->prepare("SELECT fotografia FROM alumno where matricula =:matricula");
$ssql->bindParam(':matricula',$_SESSION['sica-alumno']);
$ssql->execute();

$filas=$ssql->fetch();
	$url = "../home/php/";
	$imagen=$filas['fotografia'];
	$dir = $url.$imagen;
?>
     <img src="<?php echo $dir;?>"/>
