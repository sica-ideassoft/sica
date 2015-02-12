<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();

$sqll = $conn->prepare("SELECT matricula FROM alumno WHERE matricula=:matricula");
$sqll->bindParam(":matricula",$_POST['matricula']);
$sqll->execute();

if ($sqll->fetchColumn(0)) {
	header("location:../error.php");
	exit();
}else{

$sql =$conn->prepare("INSERT INTO alumno  VALUES (:idA,:grupo,:nombre,:paterno,:materno,:matricula,:curp,:telefono,:correo,:genero,:nacimiento,:edad,:estado,:municipio,:colonia,:calle,:interior,:exterior,:nacionalidad,:civil,:pass,:fname,:activo,:ip)");

$vacio = "";
$activado = "1";
$password = "sica-alumno";

$sql->bindParam(":idA",$vacio);
$sql->bindParam(":grupo",$_POST['grupo']);
$sql->bindParam(":nombre",$_POST['nombre']);
$sql->bindParam(":paterno",$_POST['paterno']);
$sql->bindParam(":materno",$_POST['materno']);
$sql->bindParam(":matricula",$_POST['matricula']);
$sql->bindParam(":curp",$_POST['curp']);
$sql->bindParam(":telefono",$_POST['telefono']);
$sql->bindParam(":correo",$_POST['correo']);
$sql->bindParam(":genero",$_POST['genero']);
$sql->bindParam(":nacimiento",$_POST['nacimiento']);
$sql->bindParam(":edad",$_POST['edad']);
$sql->bindParam(":estado",$_POST['estado']);
$sql->bindParam(":municipio",$_POST['municipio']);
$sql->bindParam(":colonia",$_POST['colonia']);
$sql->bindParam(":calle",$_POST['calle']);
$sql->bindParam(":interior",$_POST['interior']);
$sql->bindParam(":exterior",$_POST['exterior']);
$sql->bindParam(":nacionalidad",$_POST['nacionalidad']);
$sql->bindParam(":civil",$_POST['civil']);
$sql->bindParam(":pass",md5(sha1($password)));
$sql->bindParam(":fname",$vacio);
$sql->bindParam(":activo",$activado);
$sql->bindParam(":ip",$_SERVER['REMOTE_ADDR']);
$sql->execute();
}

?>