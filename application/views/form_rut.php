


<div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay-content">

  	<?php 

     if($informacion==false){ echo '<script type="text/javascript">alert("alumno no encontrad");</script>';}

      echo  form_open ('cursos/buscarrut','id="buscar_rut"');
			echo  form_input ( 'rut' );
			echo  form_submit ( 'submit' ,  'Buscar alumn ','class="btn btn-primary"' ); 
			echo  form_close (); ?>
    
  </div>
</div>
<div id="formulario" class="overlay">
  <span class="closebtn" onclick="closeform()" title="Close Overlay">×</span>
  <div class="formulario-content">
  	<?php echo  form_open ('cursos/buscarrut','id="hola"');
			echo form_label('Nombre','a' ,'nombre');
        echo form_input('nombre','','id=buscar');echo '<br>';
        echo form_label('Sueldo', 'sueldo');
        echo form_input('sueldo','','id=buscar');echo '<br>';
			echo  form_submit ( 'submit' ,  'Buscar alumn' ); 
			echo  form_close (); ?>
    
  </div>
</div>

<div align="center"><button class="openBtn"  onclick="openSearch()"><p >Buscar malla</p></button></div>
<div align="center"><button class="openBtn"  onclick="openform()"><p >ingresar alumno</p></button></div>

<script>
	function openform() {
    document.getElementById("formulario").style.display = "block";
}

function closeform() {
    document.getElementById("formulario").style.display = "none";
}
function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}


</script>
