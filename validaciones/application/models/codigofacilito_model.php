<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codigofacilito_model extends CI_Model{
	function __construct(){
	parent::__construct();
	$this->load->database();
}
function crearCurso($data){
	$this->db->insert('cursos',array('nombreCurso'=>$data['nombre'],'videosCurso'=> $data['videos']));
}

function obtenerCurso(){
	$query = $this->db->get('cursos');
	if($query->num_rows()>0){
		return $query;
	} else{

	} return false;
}

function obtenerCursos($id){
	$this->db->where('idCurso',$id);
	$query = $this->db->get('cursos');
	if($query->num_rows()>0) return $query;
	else return false;
}
function actualizarCurso($id,$data){
	$datos = array(
'nombreCurso'=>$data['nombre'],
'videosCurso'=>$data['videos']
	);
$this->db->where('idCurso',$id);
$query = $this->db->update('cursos',$datos);

}
function eliminarCurso($id){
	$query =$this->db->delete('cursos',array('idCurso'=>$id));
	//$query = "DELETE FROM cursos where idCurso = $id";
	//$this->db->query($query);
}
}
?>