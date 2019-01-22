<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->helper('mi');
	$this->load->helper('form');
	$this->load->model('codigofacilito_model');

	
}
function index(){
	$data['segmento'] = $this->uri->segment(3);
	$this->load->view('codigofasilito/hadaer');
	//$this->load->view('codigofasilito/bienvenido');
if(!$data['segmento']){
	$data['cursos']= $this->codigofacilito_model->obtenerCursos();
}else{
	$data['cursos']= $this->codigofacilito_model->obtenerCursos($data['segmento']);
}
$this->load->view('codigofasilito/cursos',$data);
}

function ejemplo(){
	$this->load->library('menu',array('Inicio','Contacto','Cursos'));
	$data['mi_menu'] = $this->menu->construirmenu();
	$this->load->view('codigofacilito/hedaer');
	$this->load->view('codigofacilito/bienvenido',$data);

}

function nuevo(){
	$this->load->view('codigofacilito/formulario');

}
function recibirdatos(){
	$data = array(
'idCurso'=>$this->input->post('idCurso'),		
'nombre'=> $this->input->post('nombre'),
'videos'=> $this->input->post('videos')
	);

	$this->codigofacilito_model->crearCurso($data);

	$this->load->view('codigofacilito/formulario');
}
function obtenercursos(){
	$query = $this->db->get('cursos');
	if($query->num_rows()>0) return $query;
	else return false;
$data['cursos']= $this->codigofacilito_model->obtenerCursos();
	$this->load->view('codigofacilito/formulario');
}

function editar(){
	$data['id'] = $this->uri->segment(3);
	$data['curso'] = $this->codigofacilito_model->obtenerCursos($data['id']);
	$this->load->view('codigofacilito/hedaer');
    $this->load->view('codigofacilito/editar',$data);

}
function actualizar(){
	$data = array(
'nombre' => $this->input->post('nombre'),
'videos' => $this->input->post('videos')	);
	$this->codigofacilito_model->actualizarCurso($this->uri->segment(3),$data);
	$this->load->view('codigofacilito/hedaer');
	$this->load->view('codigofacilito/bienvinido');
}

function borrar(){
	$id= $this->uri->segment(3);
	$this->codigofacilito_model->eliminarCurso($id);
}
}
?>