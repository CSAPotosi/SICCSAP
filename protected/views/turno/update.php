<?php
$this->breadcrumbs=array(
	'Turnos'=>array('index'),
	$model->id_turno=>array('view','id'=>$model->id_turno),
	'Update',
);

$this->menu=array(
	array('label'=>'List Turno','url'=>array('index')),
	array('label'=>'Create Turno','url'=>array('create')),
	array('label'=>'View Turno','url'=>array('view','id'=>$model->id_turno)),
	array('label'=>'Manage Turno','url'=>array('admin')),
);
?>

<h1>Update Turno <?php echo $model->id_turno; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>