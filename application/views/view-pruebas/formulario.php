
<body>
<?php echo form_open("/codigofacilito/recibirdatos");?>

<?php 
$idAsignatura =array('name'=>'idAsignatura',
				'placeholder'=>'escribir tunombe');

$nombre=   array('name' => 'nombre','placeholder'=>'nombre asignatura' );

$semestre=   array('name' => 'semestre','placeholder'=>'semestre asignaturas' );



?>
	<?php echo form_label('idAsignatura','idAsignatura'); ?>
	<?php echo form_input($idAsignatura)?>

<br>
	<?php echo form_label('Nimbre asignatura','nombre'); ?>
	<?php echo form_input($nombre)?>


<br>
<?php echo form_label('semestre','semestre'); ?>
	<?php echo form_input($semestre)?>

<br>
<?php echo form_submit('','subir curso');?>
<?php echo form_close()?>
</body>
</html>