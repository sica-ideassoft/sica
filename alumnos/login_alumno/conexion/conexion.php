<?php
class DB{
	var $conect;
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;
	function DB(){
		$this->BaseDatos = "calificaciones";
		$this->Servidor = "localhost";
		$this->Usuario = "root";
		$this->Clave = "";
	}

	 function conectar() {
		if(!($con=@mysql_connect($this->Servidor,$this->Usuario,$this->Clave))){
			echo"<h1> [:(] A ocurrido un error de conexión</h1>";
			exit();
		}
		if (!@mysql_select_db($this->BaseDatos,$con)){
			echo"<h1> [:(] A ocurrido un error de conexión</h1>";
			exit();
		}
		$this->conect=$con;
		return true;
	}
}
?>
