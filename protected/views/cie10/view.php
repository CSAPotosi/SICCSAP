<?php
$this->breadcrumbs=array(
	'Cie10s'=>array('index'),
	$model->codigo_cie10,
);

$this->menu=array(
	array('label'=>'List Cie10','url'=>array('index')),
	array('label'=>'Create Cie10','url'=>array('create')),
	array('label'=>'Update Cie10','url'=>array('update','id'=>$model->codigo_cie10)),
	array('label'=>'Delete Cie10','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo_cie10),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cie10','url'=>array('admin')),
);
?>

<h1>View Cie10 #<?php echo $model->codigo_cie10; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'codigo_cie10',
		'titulo_cie10',
		'descripcion_cie10',
		'codigo_padre',
	),
)); ?>
