<?php
	session_start();
	if (!isset($_SESSION['alumno']) ){
		if ( @$idcnx = @mysql_connect('localhost','root','') ){

			if ( @mysql_select_db('calificaciones',$idcnx) ){

				$sql = 'SELECT user,password FROM admin WHERE user="' . $_POST['username']. '" && password="' . $_POST['password'] . '" LIMIT 1';
				if ( @$res = @mysql_query($sql) ){
					if ( @mysql_num_rows($res) == 1 ){

						$user = @mysql_fetch_array($res);

						$_SESSION['alumno']	= $user['user'];

						echo 1;

					}
					else
						echo 0;
				}
				else
					echo 0;


			}

			mysql_close($idcnx);
		}
		else
			echo 0;
	}
	else{
		echo 0;
	}
?>