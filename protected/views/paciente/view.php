<?php
$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->id_paciente,
);

$this->menu=array(
	array('label'=>'List Paciente','url'=>array('index')),
	array('label'=>'Create Paciente','url'=>array('create')),
	array('label'=>'Update Paciente','url'=>array('update','id'=>$model->id_paciente)),
	array('label'=>'Delete Paciente','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_paciente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Paciente','url'=>array('admin')),
);
?>

<h1>View Paciente #<?php echo $model->id_paciente; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
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
		'id_paciente',
		'ocupacion_paciente',
		'grupo_sanguineo_paciente',
		'nombre_responsable',
		'telefono_responsable',
		'relacion_responsable_paciente',
		'tipo_paciente',
		'estado_paciente',
		'fecha_muerte',
		'id_empresa',
	),
)); ?>
