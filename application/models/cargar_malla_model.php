<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Cargar_malla_model extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
		$this-> load -> database();
		$this-> load->model("cargar_malla_model");
	}
	function crearCurso($data){
		$this->db->insert('asignatura',Array("idAsignatura"=>$data["idAsignatura"],"nombre"=>$data["nombre"],"semestre"=>$data["semestre"],"aprobado"=>"0"));

	}
	function consultacursos($i){

		$this->db->select('*');
		$this->db->from('asignatura');
		$this->db->where('semestre',$i);
		$query=$this->db->get();
		if($query->num_rows()>0) return $query;
		else return false;
	}
	function recargar($cursos){
		
	foreach ($cursos as $key =>$v ) {
  
  	$this->db->set('aprobado',$v, FALSE);
	$this->db->where('idAsignatura', $key);
	$this->db->update('asignatura');
  }
  }
  	function consultarequisitos($id){

		$this->db->select('idrequisito');
		$this->db->from('requisito');
		$this->db->where('idAsignatura',$id);
		$query=$this->db->get();
		if($query->num_rows()>0) return $query;
		else return "0";
	}
}
?>