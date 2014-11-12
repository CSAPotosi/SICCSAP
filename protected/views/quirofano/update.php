<?php
$this->breadcrumbs=array(
	'Quirofanos'=>array('index'),
	$model->id_quirofano=>array('view','id'=>$model->id_quirofano),
	'Update',
);

$this->menu=array(
	array('label'=>'List Quirofano','url'=>array('index')),
	array('label'=>'Create Quirofano','url'=>array('create')),
	array('label'=>'View Quirofano','url'=>array('view','id'=>$model->id_quirofano)),
	array('label'=>'Manage Quirofano','url'=>array('admin')),
);
?>

<h1>Update Quirofano <?php echo $model->id_quirofano; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>