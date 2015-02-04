<?php
  include_once("../../conexion/conectar.php");
  $conn = new DB;
  $conn->conectar();

	session_start();
	if (!isset($_SESSION['admin-sica']) ){

				$sql = 'SELECT id_admin,user,password FROM admin WHERE user="'. $_POST['username'].'" && password="'. $_POST['password'].'" LIMIT 1';
				if (@$res = @mysql_query($sql) ){
					if ( @mysql_num_rows($res) == 1 ){
						$user = @mysql_fetch_array($res);
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