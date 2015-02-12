<?php
include_once("../../../conexion/conexion.php");
$conn= new Conexion();
header('Content-Type: text/html; charset=UTF-8');
// $consulta = mysql_query("SELECT nombre FROM maestro");

$id = $_POST['id'];
$sqll1 = $conn->prepare("SELECT * FROM materias where id_materia = :id");
$sqll1->bindParam(':id',$id);
$sqll1->execute();
$rou1=$sqll1->fetch();

$credito = $rou1['credito'];
$sql1 =$conn->prepare("SELECT  id_credito,credito  FROM credito order by id_credito=:credito desc");

$sql1->bindParam(':credito',$credito);
$sql1->execute();
function credito(){
	global $sql1;
	while($row1 =$sql1->fetch()){
		?>
		<option value="<?php echo $row1['id_credito']; ?>"><?php echo $row1['credito'];?></option>
		<?php
	}

}

?>

