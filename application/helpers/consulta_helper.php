<?php
	function llamar_modelo($i){
		$CI = get_instance();
		$query=$CI->cargar_malla_model->consultacursos($i);
		return $query ->result();

		
	}
	function consultar_requisitos($idAsignatura){
		$CI = get_instance();
		$query_r=$CI->cargar_malla_model->consultarequisitos($idAsignatura);
	
		return $query_r -> result();
		

	}

?>