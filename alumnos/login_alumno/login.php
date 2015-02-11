<?php
	include_once("../../conexion/conexion.php");
	$conn = new Conexion();
	session_start();
	if (!isset($_SESSION['alumno']) ){
				$sql = 'SELECT matricula FROM alumno WHERE matricula="'. $_POST['username']. '" && password="' . md5(sha1($_POST['password'])) . '" LIMIT 1';
				if ($query = $conn->query($sql) ){
					if ($query->rowCount() == 1 ){
						$user = $query->fetch();
						$_SESSION['alumno']	= $user['matricula'];
						echo 1;
					}
					else
						echo 0;
				}

		else
			echo 0;
	}
	else{
		echo 0;
	}
?>