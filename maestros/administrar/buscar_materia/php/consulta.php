<?php
include('functions.php');

$id=$_GET["id"];

if($resultset=getSQLResultSet("SELECT * FROM 'datosPersonales' WHERE id_persona='$id'")){

    while ($row = $resultset->mysql_fetch_array(MYSQLI_NUM)){
        echo json_encode($row);
    }
}
?>