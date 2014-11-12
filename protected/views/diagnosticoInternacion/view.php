<?php
$this->breadcrumbs=array(
	'Diagnostico Internacions'=>array('index'),
	$model->id_diagnostico,
);

$this->menu=array(
	array('label'=>'List DiagnosticoInternacion','url'=>array('index')),
	array('label'=>'Create DiagnosticoInternacion','url'=>array('create')),
	array('label'=>'Update DiagnosticoInternacion','url'=>array('update','id'=>$model->id_diagnostico)),
	array('label'=>'Delete DiagnosticoInternacion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_diagnostico),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DiagnosticoInternacion','url'=>array('admin')),
);
?>

<h1>View DiagnosticoInternacion #<?php echo $model->id_diagnostico; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_diagnostico',
		'fecha_diagnostico',
		'evaluacion_medica',
	),
)); ?>
