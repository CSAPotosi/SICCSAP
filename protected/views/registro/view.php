<?php
$this->breadcrumbs=array(
	'Registros'=>array('index'),
	$model->id_registro,
);

$this->menu=array(
	array('label'=>'List Registro','url'=>array('index')),
	array('label'=>'Create Registro','url'=>array('create')),
	array('label'=>'Update Registro','url'=>array('update','id'=>$model->id_registro)),
	array('label'=>'Delete Registro','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_registro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Registro','url'=>array('admin')),
);
?>

<h1>View Registro #<?php echo $model->id_registro; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_registro',
		'id_empleado',
		'fecha_de_registro',
		'hora_ingreso',
		'hora_salida',
		'excepcion',
	),
)); ?>
