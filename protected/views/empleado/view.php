<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->id_empleado,
);

$this->menu=array(
	array('label'=>'List Empleado', 'url'=>array('index')),
	array('label'=>'Create Empleado', 'url'=>array('create')),
	array('label'=>'Update Empleado', 'url'=>array('update', 'id'=>$model->id_empleado)),
	array('label'=>'Delete Empleado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_empleado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Empleado', 'url'=>array('admin')),
);
?>

<h1>View Empleado #<?php echo $model->id_empleado; ?></h1>

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
		'estado',
		'estado_civil',
		'id_empleado',
		'fecha_de_contratacion',
		'cargo',
		'id_departamento',
	),
)); ?>
