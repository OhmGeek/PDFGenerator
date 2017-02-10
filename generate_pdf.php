<?php
include_once 'vendor/autoload.php';

use mikehaertl\wkhtmlto\Pdf;

$html_data = $_POST['html'];
$options = array(
    'binary' => '/usr/bin/wkhtmltopdf',
    'load-error-handling' => 'ignore',
    'load-media-error-handling' => 'ignore',
);

$pdf = new Pdf($html_data);
$pdf->setOptions($options);
if(!$pdf->send()) {
	echo $pdf->getError();
}
