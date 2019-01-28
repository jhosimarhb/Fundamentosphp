<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
	private $email;
	private $password;

	public function __construct(){
		parent::__construct();
	}

	function getEmail(){
		return $this->email;
	}

	function getPassword(){
		return $this->password;
	}
	function setEmail($email){
		$this->email= $email;
	}
	function setpassword($password){
		$this->password = $password;
	}

	public function Login_model(){
		$contador =0;
		$sql= "SELECT * from usuario WHERE email = '$this->email' ";
		$resultado = $this->db->query($sql)->row();

		if(isset($resultado)){
			$a = $resultado->password;

			if(password_verify($this->password,$a)){
				$contador++;
			}
		}

		if($contador >0){
			return $resultado;
		}else{
			return fasel;
		}
	}

}


 ?>
