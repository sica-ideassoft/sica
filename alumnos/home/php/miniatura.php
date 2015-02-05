<?php
if (!isset($_SESSION['alumno'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../login_alumno/index.php";
</script>';
}
$matricula = $_SESSION['alumno'];
 ?>
<?php
include_once("../../conexion/conectar.php");
$conn = new DB();
$conn->conectar();

$consulta=mysql_query("SELECT fotografia FROM alumno where matricula ='".$matricula."'");

while($filas=mysql_fetch_array($consulta)){
	$url = "php/";
	$imagen=$filas['fotografia'];
	$dir = $url.$imagen;
?>
     <img src="<?php echo $dir;?>"/>


<?php

}

?>