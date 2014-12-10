<?php
session_start();
unset($_SESSION['admin-sica']);
header('location:login_admin/index.php');
?>