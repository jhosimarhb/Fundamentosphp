<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Codigofasilito extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->helper('mi');
	$this->load->helper('form');
}
function index(){
	$this->load->view('codigofasilito/hadaer');
	$this->load->view('codigofasilito/bienvenido');
}

function ejemplo(){
	$this->load->library('menu',array('Inicio','Contacto','Cursos'));
	$data['mi_menu'] = $this->menu->construirmenu();
	$this->load->view('codigofasilito/hedaer');
	$this->load->view('codigofasilito/bienvenido',$data);

}

function nuevo(){
	$this->load->view('codigofasilito/formulario');

}
function nuevo1(){
	$data = array(
'nombre'=> $this->input->post('nombre'),
'videos'=> $this->imput->post('videos')
	);
	$this->codigofacilito_model->crearCurso($data);
	$this->load->view('codigofasilito/formulario');
}

}
?>