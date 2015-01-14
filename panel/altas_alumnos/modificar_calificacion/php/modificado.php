<?php
include_once("../../conectar.php");
$conn = new DB;
$conn->conectar();

$id = $_GET["id"];

$clavesep     = $_POST['sep'];
$modulo       = $_POST['modulo'];

$nombre       = $_POST['nombre'];
$profesor     = $_POST['profesor'];
$fecha1       = $_POST['fecha1'];
$fecha2       = $_POST['fecha2'];
$creditos     = $_POST['creditos'];
$calificacion = $_POST['calificacion'];

$ssql = "UPDATE materias set claveSEP = '".$clavesep."',modulo = '".$modulo."',nombre = '".$nombre."',profesor = '".$profesor."',fecha_inicio = '".$fecha1."',fecha_fin = '".$fecha2."',credito = '".$creditos."',cal_min = '".$calificacion."' WHERE id_materia= '".$id."'";
if(mysql_query($ssql)){

	header("location:../modificar_materia.php");
}else{
	echo "no se pudo modificar el cliente";
}
 ?>