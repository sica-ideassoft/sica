<?php
    include_once("../conectar.php");
    $conn = new DB();
    $conn->conectar();
 ?>

<?php

    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;

    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";


    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);


    $filename = $PNG_TEMP_DIR.'test.png';

    $errorCorrectionLevel = 'Q';

    $matrixPointSize = 9;

    $query = mysql_query("SELECT * FROM alumno WHERE id_alumno = '6'");
    $row = mysql_fetch_array($query);

    $alumno1 = $row['nombre_alumno'].' ';
    $alumno2 = $row['matricula'];

    echo $alumno = $alumno1.$alumno2;

        $filename = $PNG_TEMP_DIR.'test'.md5($alumno.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';

        QRcode::png($alumno, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
    echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" />';

?>
