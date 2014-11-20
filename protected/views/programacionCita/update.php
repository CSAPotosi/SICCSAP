<?php
$this->breadcrumbs=array(
	'Programacion Citas'=>array('index'),
	$model->id_programacion_cita=>array('view','id'=>$model->id_programacion_cita),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProgramacionCita','url'=>array('index')),
	array('label'=>'Create ProgramacionCita','url'=>array('create')),
	array('label'=>'View ProgramacionCita','url'=>array('view','id'=>$model->id_programacion_cita)),
	array('label'=>'Manage ProgramacionCita','url'=>array('admin')),
);
?>

<h1>Update ProgramacionCita <?php echo $model->id_programacion_cita; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>