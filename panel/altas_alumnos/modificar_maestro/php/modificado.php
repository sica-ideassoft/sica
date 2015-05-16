<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$sql = $conn->prepare("UPDATE maestro set nombre = :nombre,A_paterno = :paterno,A_materno=:materno,clave=:clavep,curp=:curp,telefono=:telefono,correo=:correo,genero=:genero,edad=:edad,estado_civil=:civil,fecha_nacimiento=:nacimiento,Estado=:estado,municipio=:municipio,calle=:calle,Ninterior=:interior,Nexterior=:exterior,nacionalidad=:nacionalidad WHERE id_maestro= :id");

$sql->bindParam(':id',$_POST["id"]);
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
$sql->execute();


$ssql = $conn->prepare("UPDATE user_maestro set user = :user,password = :password WHERE id_maestro= :id");
$ssql->bindParam(':id',$_POST["id"]);
$ssql->bindParam(':user',$_POST['user']);
$ssql->bindParam(':password',md5(sha1($_POST['password'])));
$ssql->execute();


 ?>