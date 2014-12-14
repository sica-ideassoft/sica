<?php

$con = mysql_connect('localhost', 'root', 'tescha4951');
mysql_select_db("calificaciones", $con);

$insert = "INSERT INTO alumno (id_alumno,nombre,A_paterno) VALUES (null,'".$_POST['nombre']."', '".$_POST['paterno']."')";
mysql_query($insert);

?>
<!-- include_once("variables.php");
include_once("conexion.php");
$conexion = new DB;
$con = $conexion->conectar();
$insertar = mysql_query($con,$insert = "INSERT INTO alumno (id_alumno,nombre,A_paterno,A_materno,matricula,curp,telefono,correo,genero,fecha_nacimiento,edad,grado,grupo,estado,municipio,calle,nacionalidad,estado_civil,fotografia,staus) VALUES
(NULL,'$nombre', '$paterno','$materno','$matricula','$curp'
	,'$telefono','$correo','$genero','$nacimiento','$edad'
	,'$grado','$grupo','$estado','$municipio','$calle','$nacionalidad','$civil','$civil','$status')");
mysql_query($insertar); -->