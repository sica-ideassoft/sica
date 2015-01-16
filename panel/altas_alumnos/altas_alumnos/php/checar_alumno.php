<?php
include_once("../conectar.php");
$conn = new DB();
$conn->conectar();

if(isset($_POST['btnGuardar'])){
	$checkuser = mysql_query("SELECT nombre FROM alumno WHERE nombre='".$_POST['nombre']."'");
	$username_exist = mysql_num_rows($checkuser);
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
