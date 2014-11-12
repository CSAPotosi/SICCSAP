<?php
$this->breadcrumbs=array(
	'Cirugias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cirugia','url'=>array('index')),
	array('label'=>'Manage Cirugia','url'=>array('admin')),
);
?>

<h1>Create Cirugia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>