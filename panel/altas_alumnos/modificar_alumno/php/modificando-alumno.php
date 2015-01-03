<?php
require("conexion.php");

	$id = $_GET["id"];

	$nombre = $_POST["nombre"];
	$paterno = $_POST["paterno"];
	$materno = $_POST["materno"];

	$sql = "UPDATE alumno SET ";
	$sql.= "nombre=".$nombre.", A_paterno=".$paterno.", A_materno=".$materno."";
	$sql.= "WHERE id_alumno=".$id;
	$query = $connection->prepare($sql);
	$query->execute();

	if($sql==true){
	header("location:../modificar_alumno.php");
	}
	else{
		echo "algo salio mal";
	}

?>