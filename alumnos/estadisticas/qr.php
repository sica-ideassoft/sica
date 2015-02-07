<?php
    $user = $_SESSION['alumno'];
    $conn = new Conexion();
    include('phpqrcode/qrlib.php');
    // include('qrconfig.php');

    $sql = "SELECT * FROM alumno WHERE matricula  = '$user'";
    $query = $conn->query($sql);

    $row = $query->fetch();

    $alumno1 = $row['nombre_alumno'].' ';
    $apellido1  = $row['A_paterno_alumno'].' ';
    $apellido2 = $row['A_materno_alumno'].' ';
    $alumno2 = $row['matricula'];

    $alumno = $alumno1.$apellido1.$apellido2.$alumno2;


    $codeContents = $alumno;
    $tempDir = "temp/";
    $fileName = $alumno2.'.jpg';
    $outerFrame = 4;
    $pixelPerPoint = 3;
    $jpegQuality = 95;

    // generating frame
    $frame = QRcode::text($codeContents, false, QR_ECLEVEL_M);

    // rendering frame with GD2 (that should be function by real impl.!!!)
    $h = count($frame);
    $w = strlen($frame[0]);

    $imgW = $w + 2*$outerFrame;
    $imgH = $h + 2*$outerFrame;

    $base_image = imagecreate($imgW, $imgH);

    $col[0] = imagecolorallocate($base_image,255,255,255); // BG, white
    $col[1] = imagecolorallocate($base_image,0,0,0);     // FG, blue

    imagefill($base_image, 0, 0, $col[0]);

    for($y=0; $y<$h; $y++) {
        for($x=0; $x<$w; $x++) {
            if ($frame[$y][$x] == '1') {
                imagesetpixel($base_image,$x+$outerFrame,$y+$outerFrame,$col[1]);
            }
        }
    }

    // saving to file
    $target_image = imagecreate($imgW * $pixelPerPoint, $imgH * $pixelPerPoint);
    imagecopyresized(
        $target_image,
        $base_image,
        0, 0, 0, 0,
        $imgW * $pixelPerPoint, $imgH * $pixelPerPoint, $imgW, $imgH
    );
    imagedestroy($base_image);
    imagejpeg($target_image, $tempDir.$fileName, $jpegQuality);
    imagedestroy($target_image);

    // displaying
    echo '<img src="'.$tempDir.$fileName.'" />';

?>
