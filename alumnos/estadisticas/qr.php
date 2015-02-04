<?php
    $user = $_SESSION['alumno'];
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;

    $PNG_WEB_DIR = 'temp/';

    include "phpqrcode/qrlib.php";

    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);


    $filename = $PNG_TEMP_DIR.'test.png';

    $errorCorrectionLevel = 'L';

    $matrixPointSize = 3;

    $query = mysql_query("SELECT * FROM alumno WHERE matricula  = '$user'");
    $row = mysql_fetch_array($query);

    $alumno1 = $row['nombre_alumno'].' ';
    $apellido1  = $row['A_paterno_alumno'].' ';
    $apellido2 = $row['A_materno_alumno'].' ';
    $alumno2 = $row['matricula'];

    $alumno = $alumno1.$apellido1.$apellido2.$alumno2;

        $filename = $PNG_TEMP_DIR.'test'.md5($alumno.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';

        QRcode::png($alumno, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
    echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" />';

?>
