<?php
$this->breadcrumbs=array(
	'Cirugias'=>array('index'),
	$model->id_cirugia,
);

$this->menu=array(
	array('label'=>'List Cirugia','url'=>array('index')),
	array('label'=>'Create Cirugia','url'=>array('create')),
	array('label'=>'Update Cirugia','url'=>array('update','id'=>$model->id_cirugia)),
	array('label'=>'Delete Cirugia','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cirugia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cirugia','url'=>array('admin')),
);
?>

<h1>View Cirugia #<?php echo $model->id_cirugia; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_cirugia',
		'fecha_inicio',
		'fecha_fin',
		'id_quirofano',
		'id_historial',
		'id_internacion',
	),
)); ?>
