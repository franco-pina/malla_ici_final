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
	function consultar_alumno($rut){
		$this->db->select('*');
		$this->db->from('alumno');
		$this->db->where('rut',$rut);
		$query=$this->db->get();
		if($query->num_rows()>0) return $query;
		else return false;
	}
	function consultar_cursos($rut,$i){

		$this->db->select(' asignatura.idAsignatura,nombre,semestre,estado');
		$this->db->from('alumno_asignatura');
		$this->db->join('asignatura', 'asignatura.idAsignatura = alumno_asignatura.idAsignatura','rigth');
		$this->db->where('semestre',$i);
		$this->db->where('rut',$rut);
		$query=$this->db->get();
		if($query->num_rows()>0) return $query;
		else return false;
	}
	function recargar($cursos,$rut){
	
	foreach ($cursos as $key =>$v ) {
  
  	$this->db->set('estado',$v, FALSE);
	$this->db->where('idAsignatura', $key);
	$this->db->where('rut', $rut);
	$this->db->update('alumno_asignatura');
  }
  }
  	function consultar_requisitos(){

		$this->db->select('idAsignatura,idrequisito');
		$this->db->from('requisito');
		$query=$this->db->get();
		if($query->num_rows()>0) return $query;
		else return "0";
	}
}
?>