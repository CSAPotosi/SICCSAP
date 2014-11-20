<?php
$this->breadcrumbs=array(
	'Recetas'=>array('index'),
	$model->id_receta,
);

$this->menu=array(
	array('label'=>'List Receta','url'=>array('index')),
	array('label'=>'Create Receta','url'=>array('create')),
	array('label'=>'Update Receta','url'=>array('update','id'=>$model->id_receta)),
	array('label'=>'Delete Receta','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_receta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Receta','url'=>array('admin')),
);
?>

<h1>View Receta #<?php echo $model->id_receta; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_receta',
		'nombre',
		'cantidad',
		'tratamiento',
		'id_diagnostico',
	),
)); ?>
