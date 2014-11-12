<?php
$this->breadcrumbs=array(
	'Quirofanos'=>array('index'),
	$model->id_quirofano,
);

$this->menu=array(
	array('label'=>'List Quirofano','url'=>array('index')),
	array('label'=>'Create Quirofano','url'=>array('create')),
	array('label'=>'Update Quirofano','url'=>array('update','id'=>$model->id_quirofano)),
	array('label'=>'Delete Quirofano','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_quirofano),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Quirofano','url'=>array('admin')),
);
?>

<h1>View Quirofano #<?php echo $model->id_quirofano; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_quirofano',
		'nombre_quirofano',
		'descripcion_quirofano',
	),
)); ?>
