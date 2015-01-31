<form method="POST" action="">
<select name="search" id="">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
</select>
<input type="submit" value="Buscar" name="buscar">
</form>

<?php
$link = @mysql_connect("localhost", "root","tescha4951");
@mysql_select_db("calificaciones", $link);
$buscar = $_POST['search'];
$result = mysql_query("SELECT * FROM banner WHERE id_banner LIKE '%$buscar%' ORDER BY tema ", $link);
while($row = mysql_fetch_array($result)){

           echo "<td>".$row["id_banner"]."</td> \n";
            echo "<td>".$row["tema"]."</td> \n";
}
?>
