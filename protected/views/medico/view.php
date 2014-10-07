<?php
/* @var $this MedicoController */
/* @var $model Medico */

$this->breadcrumbs=array(
	'Medicos'=>array('index'),
	$model->id_medico,
);

$this->menu=array(
	array('label'=>'List Medico', 'url'=>array('index')),
	array('label'=>'Create Medico', 'url'=>array('create')),
	array('label'=>'Update Medico', 'url'=>array('update', 'id'=>$model->id_medico)),
	array('label'=>'Delete Medico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_medico),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Medico', 'url'=>array('admin')),
);
?>

<h1>View Medico #<?php echo $model->id_medico; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_persona',
		'dni',
		'nit',
		'nombres',
		'apellidos',
		'direccion',
		'sexo',
		'localidad',
		'pais',
		'telefono',
		'celular',
		'email',
		'fecha_de_nacimiento',
		'fotografia',
		'estado_civil',
		'id_medico',
		'matricula',
		'colegiatura',
		'estado',
		'motivo_cambio_estado',
	),
)); ?>
