<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codigofacilito_model extends CI_Model{
	function __construct();
	parent::__construct();
	$this->load->database();
}
function crearCurso(){
	$this->db->insert('curso',array('nombreCurso'=>$data['nombre'],'videosCurso'=> $data['videos']));
}

?>