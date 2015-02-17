
<?php
	require_once("dompdf/dompdf_config.inc.php");
	 //Cargamos la librería de DOMPDF

	$file = file_get_contents("Calificaciones.php");
	$dompdf = new DOMPDF();

    $dompdf->set_paper("Letter", "portrait");
    $dompdf->load_html($file);
    $dompdf->stream("Calificaciones.pdf", array("Attachment"=>0));
    $dompdf->stream("pdf".Date('Y-m-d').".pdf");
    $dompdf->render();
    header('Content-type: application/pdf');
    echo $dompdf->output();
?>