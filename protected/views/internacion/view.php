<?php
$this->breadcrumbs=array(
	'Internacions'=>array('index'),
	$model->id_internacion,
);

$this->menu=array(
	array('label'=>'List Internacion','url'=>array('index')),
	array('label'=>'Create Internacion','url'=>array('create')),
	array('label'=>'Update Internacion','url'=>array('update','id'=>$model->id_internacion)),
	array('label'=>'Delete Internacion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_internacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Internacion','url'=>array('admin')),
);
?>

<h1>View Internacion #<?php echo $model->id_internacion; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_internacion',
		'fecha_admision',
		'motivo_ingreso',
		'fecha_egreso',
		'motivo_egreso',
		'id_historial',
	),
)); ?>
