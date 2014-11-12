<?php
$this->breadcrumbs=array(
	'Detalle Servicios'=>array('index'),
	$model->id_servicio,
);

$this->menu=array(
	array('label'=>'List DetalleServicio','url'=>array('index')),
	array('label'=>'Create DetalleServicio','url'=>array('create')),
	array('label'=>'Update DetalleServicio','url'=>array('update','id'=>$model->id_servicio)),
	array('label'=>'Delete DetalleServicio','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_servicio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetalleServicio','url'=>array('admin')),
);
?>

<h1>View DetalleServicio #<?php echo $model->id_servicio; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_servicio',
		'titulo_detalle',
		'descripcion_detalle',
		'id_categoria_servicio',
	),
)); ?>
