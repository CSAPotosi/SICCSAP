<?php
$this->breadcrumbs=array(
	'Examen Laboratorios'=>array('index'),
	$model->id_servicio,
);

$this->menu=array(
	array('label'=>'List ExamenLaboratorio','url'=>array('index')),
	array('label'=>'Create ExamenLaboratorio','url'=>array('create')),
	array('label'=>'Update ExamenLaboratorio','url'=>array('update','id'=>$model->id_servicio)),
	array('label'=>'Delete ExamenLaboratorio','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_servicio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExamenLaboratorio','url'=>array('admin')),
);
?>

<h1>View ExamenLaboratorio #<?php echo $model->id_servicio; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_servicio',
		'nombre_examen',
		'descripcion_examen',
	),
)); ?>
