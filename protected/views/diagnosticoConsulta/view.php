<?php
$this->breadcrumbs=array(
	'Diagnostico Consultas'=>array('index'),
	$model->id_diagnostico,
);

$this->menu=array(
	array('label'=>'List DiagnosticoConsulta','url'=>array('index')),
	array('label'=>'Create DiagnosticoConsulta','url'=>array('create')),
	array('label'=>'Update DiagnosticoConsulta','url'=>array('update','id'=>$model->id_diagnostico)),
	array('label'=>'Delete DiagnosticoConsulta','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_diagnostico),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DiagnosticoConsulta','url'=>array('admin')),
);
?>

<h1>View DiagnosticoConsulta #<?php echo $model->id_diagnostico; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_diagnostico',
		'enfermedad',
		'tratamiento',
		'observaciones',
		'ritmo_cardiaco',
		'frecuencia_respiratoria',
		'temperatura',
		'precion_arterial',
		'peso',
		'talla',
		'id_historial_consulta',
	),
)); ?>
