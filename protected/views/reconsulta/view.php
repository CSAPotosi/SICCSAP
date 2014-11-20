<?php
$this->breadcrumbs=array(
	'Reconsultas'=>array('index'),
	$model->id_reconsulta,
);

$this->menu=array(
	array('label'=>'List Reconsulta','url'=>array('index')),
	array('label'=>'Create Reconsulta','url'=>array('create')),
	array('label'=>'Update Reconsulta','url'=>array('update','id'=>$model->id_reconsulta)),
	array('label'=>'Delete Reconsulta','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_reconsulta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reconsulta','url'=>array('admin')),
);
?>

<h1>View Reconsulta #<?php echo $model->id_reconsulta; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_reconsulta',
		'fecha_reconsulta',
		'evolucion',
		'observaciones',
		'id_historial_consulta',
	),
)); ?>
