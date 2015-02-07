<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();

if(isset($_POST['btnGuardar'])){
	$checkuser = "SELECT nombre FROM alumno WHERE nombre='".$_POST['nombre']."'";
	$query = $conn->$checkuser;
	$username_exist = $query->rowCount();
	if ($username_exist>0) {
		?>
		<script src="alertifyjs/alertify.js"></script>
		<script>
 		alertify.alert().set('El Usuario ya existe').show();
		</script>
		<?php
		return false;
	}else{

		echo ('<script languaje = "JavaScript">
			alert("todo salio bien");
			</script>');
	}

}

 ?>
