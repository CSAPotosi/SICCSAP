<?php
$this->breadcrumbs=array(
	'Quirofanos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Quirofano','url'=>array('index')),
	array('label'=>'Manage Quirofano','url'=>array('admin')),
);
?>

<h1>Create Quirofano</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>