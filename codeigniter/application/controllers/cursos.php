<?php defined('BASEPATH') OR exit('No direct script access allowed');

class curso extends CI_Controller {
function __construct(){

parent::__construct();
	$this->load->helper('mi');
	$this->load->helper('form');

}

function index(){


}

function nuevo(){
	$this->load->view('curso/formulario');

}
function recibirdatos(){
	$data = array(
'nombre'=> $this->input->post('nombre'),
'videos'=> $this->input->post('videos')
	);

	$this->codigofacilito_model->crearCurso($data);

	
}


}
?>