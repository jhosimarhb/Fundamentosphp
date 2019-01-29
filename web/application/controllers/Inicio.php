<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Inicio extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{

		$data=array('definir' => 1);
		$this->load->view('frontend/Head');
		$this->load->view('frontend/Inicio',$data);
		$this->load->view('frontend/Footer');
	}
}
 ?>