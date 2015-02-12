<?php
 include_once("../../../conexion/conexion.php");
 $conn = new Conexion();
header('Content-Type: text/html; charset=UTF-8');

$sql = "SELECT  id_credito,credito  FROM credito";
$query = $conn->query($sql);
function credito(){
	global $query;
	while($row = $query->fetch()){
		?>
		<option value="<?php echo $row['id_credito']; ?>"><?php echo $row['credito']; ?></option>
		<?php
	}

}

?>