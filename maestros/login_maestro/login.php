<?php
	session_start();
	if (!isset($_SESSION['maestro-session']) ){
		if ( @$idcnx = @mysql_connect('localhost','root','tescha4951') ){

			if ( @mysql_select_db('calificaciones',$idcnx) ){

				$sql = 'SELECT user,password FROM user_maestro WHERE user="'. $_POST['username'].'" && password="'. $_POST['password'].'" LIMIT 1';
				if (@$res = @mysql_query($sql) ){
					if ( @mysql_num_rows($res) == 1 ){
						$user = @mysql_fetch_array($res);
						$_SESSION['maestro-session'] = $user['user'];
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