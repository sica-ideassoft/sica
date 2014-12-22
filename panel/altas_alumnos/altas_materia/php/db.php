<?php

$conn = @mysql_connect('localhost','root','tescha4951') or die (mysql_error());
$db=mysql_select_db('calificaciones',$conn) or die (mysql_error($conn));

?>