<?php
include_once("PDO_Pagination.php");
$root = 'root';
$password = 'tescha4951';
$host = 'localhost';
$dbname = 'calificaciones';
$connection = new PDO("mysql:host=$host;dbname=$dbname;", $root, $password);
$pagination = new PDO_Pagination($connection);

?>