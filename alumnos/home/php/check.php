<?php
include_once("../../conexion/conexion.php");
$conn = new Conexion();

$sql = $conn->prepare("SELECT fotografia FROM alumno WHERE matricula=:matricula");
$sql->bindParam(':matricula',$_SESSION['alumno']);
$sql->execute();

$row = $sql->fetch();
$foto = $row["fotografia"];
if ($foto==true) {
	?>
	<style>
		.imagen{
			display: none;
		}
	</style>
	<?php
}else{

}
 ?>