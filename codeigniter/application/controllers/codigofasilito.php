<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Codigofasilito extends CI_Controller {
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
	$data['cursos']= $this->codigofacilito_model->obtenercursos();
}else{
	$data['cursos']= $this->codigofacilito_model->obtenercursos($data['segmento']);
}
$this->load->view('codigofasilito/cursos',$data);
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
function recibirdatos(){
	$data = array(
'nombre'=> $this->input->post('nombre'),
'videos'=> $this->input->post('videos')
	);

	$this->codigofacilito_model->crearCurso($data);

	$this->load->view('codigofasilito/formulario');
}
function obtenercursos(){
	$query = $this->db->get('cursos');
	if($query->num_rows()>0) return $query;
	else return false;
$data['cursos']= $this->codigofacilito_model->obtenercursos();
	$this->load->view('codigofasilito/formulario');
}

function editar(){
	$data['id'] = $this->uri->segment(3);
	$data['curso'] = $this->codigofacilito_model->obtenercursos($data['id']);
	$this->load->view('codigofasilito/hedaer');
    $this->load->view('codigofasilito/editar',$data);

}
function actualizar(){
	$data = array(
'nombre' => $this->input->post('nombre'),
'videos' => $this->input->post('videos')	);
	$this->codigofacilito_model->actualizarcurso($this->uri->segment(3),$data);
	$this->load->view('codigofasilito/hedaer');
	$this->load->view('codigofasilito/bienvinido');
}

function borrar(){

	$id['id']= $this->uri->segment(3);
	$data['curso']=$this->codigofacilito_model->eliminarcurso($id);
}
}
?>