<?php
include_once("../../../conexion/conexion.php");
$conn =  new Conexion();
$user = $_SESSION['maestro-session'];

$sql = "SELECT
g.id_grupo,g.id_maestro,g.id_materia,g.id_create_grupo,
m.id_materia,m.claveSEP,m.nombre_materia,m.credito,
o.id_maestro,o.nombre,
u.id_login_maestro,u.id_maestro,u.user,
c.id_create_grupo,c.create_grupo,c.create_grado
FROM materias m
INNER JOIN grupos g ON m.id_materia = g.id_materia
INNER JOIN maestro o  ON o.id_maestro = g.id_maestro
INNER JOIN user_maestro u ON  u.id_maestro = o.id_maestro
INNER JOIN create_grupo c ON  c.id_create_grupo = g.id_create_grupo
and u.user = '$user'";
$query = $conn->query($sql);
	while ($row =$query->fetch()) {
		?>
    	<div class="module blue">
          <h2><?php echo $row["nombre_materia"];  ?>
          <a href="#"><?php echo $row["credito"];  ?></a></h2>
          <ul>
            <li><label>Grado: </label>
            <span class="echo"><?php echo $row["create_grado"];?></span></li>
            <li><label>Grupo: </label>
            <span class="echo"><?php echo $row["create_grupo"];?></span></li>
            <li><label>Profesor: </label>
            <span class="echo"><?php echo $row["nombre"];  ?></span></li>
          </ul>
        </div>

		<?php
	}
	?>

<?php

?>