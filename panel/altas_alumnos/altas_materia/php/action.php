<?php
include_once("../../conectar.php");
$conn = new DB();
$conn->conectar();
$check = mysql_query("SELECT * FROM materias order by id_materia desc");
if(isset($_POST['sep']) && isset($_POST['nombre'])&& isset($_POST['fecha1']) && isset($_POST['fecha2']) && isset($_POST['creditos']) && isset($_POST['calificacion']))
{

$sep         = mysql_real_escape_string($_POST['sep']);
$nombre      = mysql_real_escape_string($_POST['nombre']);
$fecha1      = mysql_real_escape_string($_POST['fecha1']);
$fecha2      = mysql_real_escape_string($_POST['fecha2']);
$creditos    = mysql_real_escape_string($_POST['creditos']);
$calificacion = mysql_real_escape_string($_POST['calificacion']);


// $rutaEnServidor='imagenes';
// $rutaTemporal=$_FILES['imagen']['tmp_name'];
// $nombreImagen=$_FILES['imagen']['name'];
// $rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
// move_uploaded_file($rutaTemporal,$rutaDestino);

$checkuser = mysql_query("SELECT claveSEP FROM materias WHERE claveSEP='".$sep."'");
$username_exist = mysql_num_rows($checkuser);
if ($username_exist>0) {
	header("location:../error.php");
	exit();
}else{

$query = mysql_query("INSERT INTO materias(id_materia,claveSEP,nombre_materia,fecha_inicio,fecha_fin,credito,cal_min) values (null,'$sep','$nombre','$fecha1','$fecha2','$creditos','$calificacion')");
	}
}

?>