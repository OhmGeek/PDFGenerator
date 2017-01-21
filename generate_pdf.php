<?php
include_once 'vendor/autoload.php';

use mikehaertl\wkhtmlto\Pdf;

$html_data = $_GET['html'];
$options = array(
    'binary' => '/usr/bin/wkhtmltopdf',
);

$pdf = new Pdf($html_data);
$pdf->setOptions($options);
if(!$pdf->send()) {
	echo $pdf->getError();
}
