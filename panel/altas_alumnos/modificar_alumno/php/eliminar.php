<?php
require_once 'Connection.simple.php';
$conn = dbConnect();
$id = $_GET["id"];
echo $id;
?>