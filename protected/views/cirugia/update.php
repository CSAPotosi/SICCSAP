<?php
$this->breadcrumbs=array(
	'Cirugias'=>array('index'),
	$model->id_cirugia=>array('view','id'=>$model->id_cirugia),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cirugia','url'=>array('index')),
	array('label'=>'Create Cirugia','url'=>array('create')),
	array('label'=>'View Cirugia','url'=>array('view','id'=>$model->id_cirugia)),
	array('label'=>'Manage Cirugia','url'=>array('admin')),
);
?>

<h1>Update Cirugia <?php echo $model->id_cirugia; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>