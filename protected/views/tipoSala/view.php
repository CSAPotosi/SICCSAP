<?php
/* @var $this TipoSalaController */
/* @var $model TipoSala */

$this->breadcrumbs=array(
	'Tipo Salas'=>array('index'),
	$model->id_servicio,
);

$this->menu=array(
	array('label'=>'List TipoSala', 'url'=>array('index')),
	array('label'=>'Create TipoSala', 'url'=>array('create')),
	array('label'=>'Update TipoSala', 'url'=>array('update', 'id'=>$model->id_servicio)),
	array('label'=>'Delete TipoSala', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_servicio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoSala', 'url'=>array('admin')),
);
?>

<h1>View TipoSala #<?php echo $model->id_servicio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_servicio',
		'fecha_creacion_servicio',
		'fecha_modificacion_servicio',
		'nombre_tipo_sala',
		'descripcion_tipo_sala',
	),
)); ?>
