<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$sql= $conn->prepare("UPDATE alumno set id_grupo= :grupo, nombre_alumno = :nombre,A_paterno_alumno = :paterno,A_materno_alumno =:materno,matricula =:matricula,curp = :curp,telefono =:telefono,correo =:correo,genero = :genero,fecha_nacimiento = :nacimiento,edad = :edad,estado =:estado,municipio =:municipio,colonia =:colonia,calle = :calle,Ninterior = :interior,Nexterior = :exterior,nacionalidad = :nacionalidad,fotografia = :foto,estado_civil = :civil,status =:status WHERE id_alumno=:id");

$sql->bindParam(':id',$_POST["id"]);
$sql->bindParam(':grupo',$_POST['grupo']);
$sql->bindParam(':nombre',$_POST["nombre"]);
$sql->bindParam(':paterno',$_POST["paterno"]);
$sql->bindParam(':materno',$_POST["materno"]);
$sql->bindParam(':matricula',$_POST['matricula']);
$sql->bindParam(':curp',$_POST['curp']);
$sql->bindParam(':telefono',$_POST['telefono']);
$sql->bindParam(':correo',$_POST['correo']);
$sql->bindParam(':genero',$_POST['genero']);
$sql->bindParam(':nacimiento',$_POST['nacimiento']);
$sql->bindParam(':edad',$_POST['edad']);
$sql->bindParam(':estado',$_POST['estado']);
$sql->bindParam(':municipio',$_POST['municipio']);
$sql->bindParam(':colonia',$_POST['colonia']);
$sql->bindParam(':calle',$_POST['calle']);
$sql->bindParam(':interior',$_POST['interior']);
$sql->bindParam(':exterior',$_POST['exterior']);
$sql->bindParam(':nacionalidad',$_POST['nacionalidad']);
$sql->bindParam(':foto',$_POST['foto']);
$sql->bindParam(':civil',$_POST['civil']);
$sql->bindParam(':status',$_POST['status']);

$sql->execute();
 ?>
