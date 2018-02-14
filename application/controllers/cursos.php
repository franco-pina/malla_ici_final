<?php
if(!defined('BASEPATH'))  exit('No direct script access allowed');

class Cursos extends CI_Controller {

	function __construct(){
		
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('consulta');
		$this -> load ->model("cargar_malla_model");
	}

	function guardarmalla(){
	if (isset($_POST['rut'])) {
	$rut=$this->input->post('rut');
	
	}
	if (isset($_POST['cursos'])) {
	$cursos=$this->input->post('cursos');
    $this->cargar_malla_model->recargar($cursos,$rut);
    
	}
	}


	function buscarrut(){
		$rut=$this->input->post('rut');
		$query['informacion']=$this->cargar_malla_model->consultar_alumno($rut);
		
	     if($query['informacion']==false){
	      	$this->load->view('header');
			$this->load->view('form_rut',$query);
	     }else{
	     	for ($i=1; $i <= 12; $i++) { 
		$query["s".$i]=$this->cargar_malla_model->consultar_cursos($rut,$i);
	     }
	     $query["req"]=$this->cargar_malla_model->consultar_requisitos();
		$this->load->view('header');
		$this->load->view('malla_ici',$query);
		
}	}

}
	