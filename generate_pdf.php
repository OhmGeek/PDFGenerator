<?php
use mikehaertl/phpwkhtmltopdf;

$html_data = $_POST['html'];

$pdf = new PDF($html_data);

$pdf->send('report.pdf');
