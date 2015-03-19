<form method="POST" action="" class="form-select">
<select name="search" id="" class='select'>
	<option value="1">1ra estación</option>
	<option value="2">2da estación</option>
	<option value="3">3ra estación</option>
	<option value="4">4ta estación</option>
</select>
<input type="submit" value="Buscar" name="buscar" class='buscar'>
</form>

<?php
$buscar = @$_POST['search'];
include_once("../../../conexion/conexion.php");
$conn = new Conexion();
$result ="SELECT * FROM banner WHERE id_banner LIKE '%$buscar%' ORDER BY id_banner asc";
$query = $conn->query($result);

$row = $query->fetch();
  $ruta="php/".$row['imagen'];
	?>
 <figure class='pree-banner'>
       <img src="<?php echo $ruta;?>" width="270" height="130"/>
 </figure>


    <form enctype="multipart/form-data" action="php/recibir.php" method="post" name="form1">

      <table class='table4'>
      <tr>
      <td>
      	<label for="" class="label-table4">Imagen:</label>
      </td>
        <td>
          <input type="file" name="imagen" class="imagen1" id="imagen" value="sad">
        </td>

      </tr>
      <tr>
      		<td>
      			<label for="" class="label-table4">Tema:</label>
      		</td>
        <td><input type="text" name="tema" id="tema" class='tema' value=<?php echo $row["tema"]; ?>></td>
      </tr>


      		<td>
      			<label for="" class="label-table4">Anuncio:</label>
      		</td>

      <td><input type="text" id="anuncio" name="anuncio" value="<?php echo $row['anuncio']; ?>" class='anuncio'></input>
      </tr>
      <input type="hidden" name="id" value="<?php echo $buscar; ?>">
    </table>

