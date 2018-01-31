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
	
	if (isset($_POST['cursos'])) {
	$cursos=$this->input->post('cursos');
    $_SESSION['obj'] = $_POST['cursos'];
    $this->cargar_malla_model->recargar($cursos);
	}}}
	