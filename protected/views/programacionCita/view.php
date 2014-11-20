<?php
$this->breadcrumbs=array(
	'Programacion Citas'=>array('index'),
	$model->id_programacion_cita,
);

$this->menu=array(
	array('label'=>'List ProgramacionCita','url'=>array('index')),
	array('label'=>'Create ProgramacionCita','url'=>array('create')),
	array('label'=>'Update ProgramacionCita','url'=>array('update','id'=>$model->id_programacion_cita)),
	array('label'=>'Delete ProgramacionCita','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_programacion_cita),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProgramacionCita','url'=>array('admin')),
);
?>

<h1>View ProgramacionCita #<?php echo $model->id_programacion_cita; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_programacion_cita',
		'fecha_de_registro',
		'fecha',
		'hora',
		'id_paciente',
		'id_medico',
	),
)); ?>
