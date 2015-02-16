<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();
$id = $_POST["id"];

$sql = "SELECT s.id_status,s.status_create,
a.id_alumno,a.id_create_grupo,a.nombre_alumno,a.A_paterno_alumno,a.A_materno_alumno,a.matricula,a.curp,a.telefono,a.correo,a.genero,a.fecha_nacimiento,a.edad,a.estado,a.municipio,a.colonia,a.calle,a.Ninterior,a.Nexterior,a.nacionalidad,a.estado_civil,a.fotografia,a.status
FROM alumno a
INNER JOIN status s ON s.id_status = a.status
where id_alumno = '".$id."'";
$query = $conn->query($sql);
while($filas=$query->fetch()){

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