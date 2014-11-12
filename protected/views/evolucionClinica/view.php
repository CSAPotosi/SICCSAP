<?php
$this->breadcrumbs=array(
	'Evolucion Clinicas'=>array('index'),
	$model->id_evolucion_clinica,
);

$this->menu=array(
	array('label'=>'List EvolucionClinica','url'=>array('index')),
	array('label'=>'Create EvolucionClinica','url'=>array('create')),
	array('label'=>'Update EvolucionClinica','url'=>array('update','id'=>$model->id_evolucion_clinica)),
	array('label'=>'Delete EvolucionClinica','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_evolucion_clinica),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EvolucionClinica','url'=>array('admin')),
);
?>

<h1>View EvolucionClinica #<?php echo $model->id_evolucion_clinica; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_evolucion_clinica',
		'fecha_revision',
		'estado_paciente',
		'observaciones',
		'recomendaciones',
		'id_internacion',
	),
)); ?>
