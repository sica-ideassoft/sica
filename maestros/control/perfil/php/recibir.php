<?php

include_once("../../../conexion/conexion.php");
$conn = new Conexion();

session_start();
if (!isset($_SESSION['maestro-session'])) {
echo '<SCRIPT LANGUAGE="javascript">
location.href = "../login_maestro/index.php";
</script>';
}
$user = $_SESSION['maestro-session'];

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$sql = "UPDATE user_maestro set imagen = '".$rutaDestino."' WHERE  user ='".$user."'";
$res= $conn->query($sql);


if ($res){
	?>
		<script>

		</script>
	<?php
}else{
    echo 'no se pudo modificar';
}

?>