<?php
$this->breadcrumbs=array(
	'Internacions'=>array('index'),
	$model->id_internacion=>array('view','id'=>$model->id_internacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Internacion','url'=>array('index')),
	array('label'=>'Create Internacion','url'=>array('create')),
	array('label'=>'View Internacion','url'=>array('view','id'=>$model->id_internacion)),
	array('label'=>'Manage Internacion','url'=>array('admin')),
);
?>

<h1>Update Internacion <?php echo $model->id_internacion; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>