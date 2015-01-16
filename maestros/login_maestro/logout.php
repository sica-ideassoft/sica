<?php
session_start();
unset($_SESSION['alumno']);
header('location:index.php');
?>