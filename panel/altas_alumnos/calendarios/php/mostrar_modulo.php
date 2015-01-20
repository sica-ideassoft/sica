<?php
$sql=mysql_query("SELECT * FROM modulos ORDER BY fecha ASC");

  while($row = mysql_fetch_array($sql)){
    ?>
    <div class='model'>

    <div class="elim"><a href="#" onclick="delModulo(<?php echo $row['id_modulo'];?>);">x</a></div>

    <table >
        <tr>
          <td class='title'><label ><?php echo $row['nombre']; ?></label></td>
        </tr>
        <tr>
          <td><b><label><?php  echo $row['modulo_num']; ?></label></b></td>
        </tr>
        <tr>
          <td><label><?php echo $row['fecha']; ?></label></td>
        </tr>
      </table>
    </div>
<script src="js/eliminar.js"></script>
  <?php
  }


?>