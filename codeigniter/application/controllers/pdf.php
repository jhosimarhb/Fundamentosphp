<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	}
public function index(){
	$this->load->view('Welcome/descargar');
}

public function descargar(){
	
	$data = [];
	//para que ponag la fecha en el numbre del documento
	$hoy = date("dmyhis");
	//$html es la que va a contener todo lo que se va amandar al pdf
	$html = $this->input->post('pdf');
	$pdfFilePanth = "cipdf_".$hoy.".pdf";
	$this->load->library('M_pdf');
	$this->M_pdf->WriteHTML($html);
	$this->m_pdf->Output($pdfFilePanth, "D");
}
}
?>