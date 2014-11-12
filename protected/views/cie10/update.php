<?php
$this->breadcrumbs=array(
	'Cie10s'=>array('index'),
	$model->codigo_cie10=>array('view','id'=>$model->codigo_cie10),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cie10','url'=>array('index')),
	array('label'=>'Create Cie10','url'=>array('create')),
	array('label'=>'View Cie10','url'=>array('view','id'=>$model->codigo_cie10)),
	array('label'=>'Manage Cie10','url'=>array('admin')),
);
?>

<h1>Update Cie10 <?php echo $model->codigo_cie10; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>