<?php
require_once 'php/Connection.simple.php';
$conn = dbConnect();
$id_alumno=$_GET['id'];

echo $id_alumno;

?>