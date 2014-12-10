<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Ajax login Demo</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="functions.js"></script>
	</head>
	<body>
	<div class="login_form">
	<h3>Private Area</h3>
<?php
if (!isset($_SESSION['alumno'])) {
echo 'You are not logged. <a href="index.php">login</a>';
} else {
echo 'hello <b>'.$_SESSION['alumno'].'</b> you are logged in. <a href="logout.php">logout</a>';
}
?>

</div>
</body>
</html>