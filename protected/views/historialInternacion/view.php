<?php
$this->breadcrumbs=array(
	'Historial Internacions'=>array('index'),
	$model->id_historial_internacion,
);

$this->menu=array(
	array('label'=>'List HistorialInternacion','url'=>array('index')),
	array('label'=>'Create HistorialInternacion','url'=>array('create')),
	array('label'=>'Update HistorialInternacion','url'=>array('update','id'=>$model->id_historial_internacion)),
	array('label'=>'Delete HistorialInternacion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_historial_internacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HistorialInternacion','url'=>array('admin')),
);
?>

<h1>View HistorialInternacion #<?php echo $model->id_historial_internacion; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_historial_internacion',
		'fecha_admicion',
		'fehca_egreso',
		'motivo_egreso',
		'motivo_ingreso',
		'id_historial',
	),
)); ?>
