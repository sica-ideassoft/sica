<?php
session_start();
unset($_SESSION['sica-alumno']);
header('location:login_alumno/index.php');
?>