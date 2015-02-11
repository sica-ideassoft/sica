<?php
	include_once("../../conexion/conexion.php");
	$conn =  new Conexion();
	session_start();
	if (!isset($_SESSION['maestro-session']) ){

				$sql = 'SELECT user,password FROM user_maestro WHERE user="'. $_POST['username'].'" && password="'.md5(sha1($_POST['password'])).'" LIMIT 1';
				if ($query = $conn->query($sql)){
					if ($query->rowCount() == 1 ){
						$user = $query->fetch();
						$_SESSION['maestro-session'] = $user['user'];
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