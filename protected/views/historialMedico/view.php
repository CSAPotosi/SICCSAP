<?php
$this->breadcrumbs=array(
	'Historial Medicos'=>array('index'),
	$model->id_historial,
);

$this->menu=array(
	array('label'=>'List HistorialMedico','url'=>array('index')),
	array('label'=>'Create HistorialMedico','url'=>array('create')),
	array('label'=>'Update HistorialMedico','url'=>array('update','id'=>$model->id_historial)),
	array('label'=>'Delete HistorialMedico','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_historial),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HistorialMedico','url'=>array('admin')),
);
?>

<h1>View HistorialMedico #<?php echo $model->id_historial; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_historial',
		'id_paciente',
		'fecha_creacion',
		'fecha_actualizacion',
	),
)); ?>
