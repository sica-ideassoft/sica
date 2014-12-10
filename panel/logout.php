<?php
session_start();
unset($_SESSION['alumno']);
header('location:login_admin/index.php');
?>