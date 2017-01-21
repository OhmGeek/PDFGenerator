<?php
$path_of_wkhtmltopdf = "/usr/bin/wkhtmltopdf";
$read_filename = "http://google.co.uk";

$gen = new PDFGenerator();
$gen->generate_pdf($read_filename,"test.pdf");


class PDFGenerator {

	public function __construct() {
		$this->path_of_converter = "/usr/bin/wkhtmltopdf";
	}

	public function generate_pdf($input,$output_filename) {
		$cmd = escapeshellcmd($this->path_of_converter . " " . $input . " " . $output_filename);
		shell_exec($cmd);
	}


}
