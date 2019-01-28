<?php 
class Categoria extends CI_Controller{

	function __construct(){
		parent::__construct();

		//llamandp al modelo para pasarle los datos y realizar consultas 
		$this->load->model('Categoria_model');

	}

	function index(){
		if($this->session->userdata('login')){
			$data = array('definir'=> 3);
			$this->load->view('frontend/Head');
			$this->load->view('frontend/Categoria', $data);
			$this->load->view('frontend/Footer');
		}else{
			redirect(site_url('Inicio'));
		}
	}

	function guardar_datosController(){
		if($this->input->is_ajax_request()){
			$nombre_categoria =$this->Categoria_model->setNombre_categoria
		}
	}

	function actualizar_datosController(){
		if ($this->input->is_ajax_request()){
			$id_categoria = $this->Categoria_model->setId_categoria($this->input->post("idsele"));
		}
	}
}

 ?>