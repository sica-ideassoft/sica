<?php
session_start();
unset($_SESSION['maestro-session']);
header('location:login_maestro/index.php');
?>