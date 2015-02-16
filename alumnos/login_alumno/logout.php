<?php
session_start();
unset($_SESSION['sica-alumno']);
header('location:index.php');
?>