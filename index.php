<?php
$path_of_wkhtmltopdf = "/usr/bin/wkhtmltopdf";
$read_filename = "http://google.co.uk";
$output_filename = "test.pdf";

$cmd = escapeshellcmd($path_of_wkhtmltopdf . " " . $read_filename . " " . $output_filename);

shell_exec($cmd);
