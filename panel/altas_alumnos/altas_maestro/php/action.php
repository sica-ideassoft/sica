<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$sqll = $conn->prepare("SELECT clave FROM maestro WHERE clave=:clavep");
$sqll->bindParam(':clavep',$_POST['clavep']);
$sqll->execute();

$sqll2 = $conn->prepare("SELECT user FROM user_maestro WHERE user=:user");
$sqll2->bindParam(':user',$_POST['user']);
$sqll2->execute();

if ($sqll->fetchColumn(0)) {
	header("location:../error.php");
	exit();
}
else if($sqll2->fetchColumn(0)){
	header("location:../error.php");
	exit();
}else{

$sql = $conn->prepare("INSERT INTO maestro VALUES (:idm,:nombre,:paterno,:materno,:clavep,:curp,:telefono,:correo,:genero,:edad,:civil,:nacimiento,:estado,:municipio,:calle,:interior,:exterior,:nacionalidad,:ip)");
$vacio = '';
$sql->bindParam(':idm',$vacio);
$sql->bindParam(':nombre',$_POST['nombre']);
$sql->bindParam(':paterno',$_POST['paterno']);
$sql->bindParam(':materno',$_POST['materno']);
$sql->bindParam(':clavep',$_POST['clavep']);
$sql->bindParam(':curp',$_POST['curp']);
$sql->bindParam(':telefono',$_POST['telefono']);
$sql->bindParam(':correo',$_POST['correo']);
$sql->bindParam(':genero',$_POST['genero']);
$sql->bindParam(':edad',$_POST['edad']);
$sql->bindParam(':civil',$_POST['civil']);
$sql->bindParam(':nacimiento',$_POST['nacimiento']);
$sql->bindParam(':estado',$_POST['estado']);
$sql->bindParam(':municipio',$_POST['municipio']);
$sql->bindParam(':calle',$_POST['calle']);
$sql->bindParam(':interior',$_POST['interior']);
$sql->bindParam(':exterior',$_POST['exterior']);
$sql->bindParam(':nacionalidad',$_POST['nacionalidad']);
$sql->bindParam(':ip',$_SERVER['REMOTE_ADDR']);
$sql->execute();

$stmt = $conn->query("SELECT MAX(id_maestro) AS id FROM maestro");
$lastId = $stmt->fetch(PDO::FETCH_NUM);
$id = $lastId[0];


$maestro =$conn ->prepare("INSERT INTO user_maestro VALUES (:idU,:id,:user,:password,:imagen)");
$maestro->bindParam(':idU',$vacio);
$maestro->bindParam(':id',$id);
$maestro->bindParam(':user',$_POST['user']);
$maestro->bindParam(':password',md5(sha1($_POST['password'])));
$maestro->bindParam(':imagen',$vacio);
$maestro->execute();
	}

?>

