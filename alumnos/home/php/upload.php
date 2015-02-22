<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();
session_start();
	$uploaddir = 'imagenes/';
	if (!is_dir($uploaddir)) {
   		mkdir($uploaddir);
	}
$file = basename($_FILES['userfile']['name']).strrchr($_FILES['userfile']['name']);

	$uploadfile = $uploaddir . $file;

	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {

		$sql = $conn->prepare("UPDATE alumno set fotografia = :rutaDestino WHERE  matricula =:matricula");
			$sql->bindParam(':matricula',$_SESSION['sica-alumno']);
			$sql->bindParam(':rutaDestino',$uploadfile);
			$sql->execute();
	} else {
		echo "error";
	}
?>