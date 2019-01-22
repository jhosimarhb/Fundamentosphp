<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct(argument)
	{
		parent::__construct();
		$this->load->('form_validation');
		$this->load->helper(array('auth/login_rules'))
	}
	public function index(){
		$this->load->view('welcome_message')
	}

	public function validate(){
		$this->form_validation->set_error_delimiters('','');
		$rules = getLoginRules();
		$this->form_validation->set_rules($rules);
		if($this->form_validation->rum() === FALSE){
           $errors = array(
            'email' => form_error('email'),
            'password' => form_error('password')
        );
           echo json_encode($errors);
		}else{

		}
	}
}



?>