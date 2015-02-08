<?php
$conn = new Conexion();
$sql=$conn->query("SELECT * FROM materias ORDER BY id_materia ASC");

  while($row = $sql->fetch()){
    ?>
    <div class='model'>

    <div class="elim"><a href="#" onclick="delModulo(<?php echo $row['id_materia'];?>);">x</a></div>

    <table >
        <tr>
          <td class='title'><label ><?php echo $row['nombre_materia']; ?></label></td>
        </tr>
        <tr>
          <td><b><label><?php  echo $row['claveSEP']; ?></label></b></td>
        </tr>
        <tr>
          <td><label><?php echo $row['fecha_fin']; ?></label></td>
        </tr>
      </table>
    </div>
<script src="js/eliminar.js"></script>
  <?php
  }


?>