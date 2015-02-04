<?php
include_once("../../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();


if(isset($_POST['btnGuardar'])){
$imagen = $_POST["imagen"];
$usuario = $_POST["usuario"];
$password = $_POST["password"];

	if($imagen != "" && $usuario != "" && $password !=""){
		?>
		<script src="alertifyjs/alertify.js"></script>
		<script>
 			alertify.alert().set('message','exito' ).show();
		</script>
		<?php
	}else{
		?>
		<script src="alertifyjs/alertify.js"></script>
		<script>
			var usuario = "<?php echo $user; ?>"
 			alertify.alert().set('message','error' ).show();
		</script>
	<?php
	}
}
 ?>

