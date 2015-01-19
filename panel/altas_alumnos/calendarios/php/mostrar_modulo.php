<?php
$sql=mysql_query("SELECT * FROM modulos ORDER BY fecha ASC");

  while($row = mysql_fetch_array($sql)){
    ?>
    <div class='model'>
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


  <?php
  }


?>