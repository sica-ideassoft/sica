<?php
include_once("../../../../conexion/conexion.php");
$conn = new Conexion();
// (id_calificacion,id_alumno,id_materia,creditos,calificacion,Tipo_evaluacion,acumulado)

// $materias = $_POST['min_materia'];
// $creditos = $_POST['creditos'];
$calificacion = $_POST['cal'];
$creditos  = $_POST['creditos'];
$materia  = $_POST['materia'];

$sqll= $conn->prepare("SELECT id_materia,claveSEP,nombre_materia,fecha_inicio,fecha_fin,credito,cal_min  FROM materias where id_materia = :materia");
$sqll->bindParam(':materia',$materia);
$sqll->execute();
$row =$sqll->fetch();

$calificando = $row['cal_min'];

if($calificacion >= $calificando){
		$creditos = $row['credito'];
}else{
		$creditos = 0;
}


$sql = $conn->prepare('INSERT INTO calificacion '
	   .'VALUES (:idC, :id, :materia, :creditos, :cal, :eval,:acum)');
$vacio = "";

$sql->bindParam(':idC',$vacio);
$sql->bindParam(':id',$_POST['id']);
$sql->bindParam(':materia',$materia);
$sql->bindParam(':creditos',$creditos);
$sql->bindParam(':cal',$calificacion);
$sql->bindParam(':eval',$_POST['eval']);
$sql->bindParam(':acum',$vacio);

$sql->execute();

?>
