<?php
include_once("../../conexion/conexion.php");
$conn = new Conexion();
if (!isset($_SESSION['alumno'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../login_alumno/index.php";
</script>';
}
$matricula = $_SESSION['alumno'];

$consulta="SELECT fotografia FROM alumno where matricula ='".$matricula."'";
$query = $conn->query($consulta);
while($filas=$query->fetch()){
	$url = "../home/php/";
	$imagen=$filas['fotografia'];
	$dir = $url.$imagen;
?>
     <img src="<?php echo $dir;?>"/>


<?php

}

?>