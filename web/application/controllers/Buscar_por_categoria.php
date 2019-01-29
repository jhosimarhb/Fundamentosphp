<?php 

class Buscar_por_categotia extends CI_Controller{

	function __construct(){
		parent:: __construct();
	}

	function index(){

		$data = array('definir'=>4);
		$this->load->view('frontend/Head');
		$this->load->view('frontend/Buscar-por-categoria', $data);
		$this->load->view('frontend/Footer');
	}
}


 ?>