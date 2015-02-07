<?php
session_start();
  include_once("../../conexion/conexion.php");
  $conn = new Conexion();

	if (!isset($_SESSION['admin-sica']) ){

				$sql = 'SELECT id_admin,user,password FROM admin WHERE user="'. $_POST['username'].'" && password="'. $_POST['password'].'" LIMIT 1';
				if ($query = $conn->query($sql)){
					if ($query->rowCount() == 1 ){
						$user = $query->fetch();
						$_SESSION['admin-sica']	= $user['user'];
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