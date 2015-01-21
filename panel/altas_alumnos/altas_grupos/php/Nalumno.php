<?php
require_once("conexion.php");
$conn = new DB();
$conn->conectar();
class Numero{
	function consulta()
	{
		$query = "SELECT * FROM alumno";
		$dato = mysql_query($query);
		$numero = mysql_num_rows($dato);
		echo $numero;

	}
}
?>
