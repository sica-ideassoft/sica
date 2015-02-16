<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();


$sql = $conn->prepare("SELECT * FROM
alumno a
INNER JOIN status s ON  s.id_status = a.status
where id_alumno = :id");
$sql->bindParam(':id',$_POST["id"]);
$sql->execute();
while($filas=$sql->fetch()){

	$destino = "../../../alumnos/home/php/";
	$ruta=$filas['fotografia'];
	$ruta = $destino.$ruta;
	$user=$filas['nombre_alumno'];



?>

 <figure class='foto'>
       <img src="<?php echo $ruta ;?>" width="119" height="139"/>
 </figure>
 <div class="content-name">

       <label for="" class="name"><?php echo $user ;?></label>
 </div>
 <div class="content-name">
       <label for="" class="" id='status'><?php echo $filas["status_create"];?></label>
 </div>

<?php }?>