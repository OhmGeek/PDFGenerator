<?php

$html_data = $_POST['html_content'];
$tmpinput = tmpFile();

fwrite($tmpinput,$html_data);

$gen = new PDFGenerator();
$gen->generate_pdf($tmpinput,"test.pdf");


class PDFGenerator {

	public function __construct() {
		$this->path_of_converter = "/usr/bin/wkhtmltopdf";
	}

	public function generate_pdf($input,$output_filename) {
		$cmd = escapeshellcmd($this->path_of_converter . " " . $input . " " . $output_filename);
		shell_exec($cmd);
	}


}
