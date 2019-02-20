<?php 

class Buscar_por_categoria extends CI_Controller{

	function __construct(){
		parent:: __construct();
	}

	function index(){

		$data = array('definir'=>4);
		$this->load->view('frontend/Head');
		$this->load->view('frontend/Buscar_por_categoria', $data);
		$this->load->view('frontend/Footer');
	}
}


 ?>